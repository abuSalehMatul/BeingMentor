<?php

namespace App\Http\Controllers;

use App\Model\ChatRoom;
use App\Model\Chat;
use App\Model\Ticket;
use App\User;
use Illuminate\Http\Request;
use App\Events\SendMessageEvent;
use App\Helper;
use App\Model\Mentor;
use App\Model\Rating;
use App\Model\Solve;
use Session;
use App\Model\VideoChat;

class ChatController extends Controller
{
    public function initialize(Request $request)
    {
        $message = Helper::packageActivity('chatting');
        if($message != 'procced'){
            Session::flash('package-message', $message);
            return 'only-package';
        }
        $receiver_id = $request->receiver_id;
        $ownId = auth()->id();
        $chatRoomId = ChatRoom::findChatRoom($ownId, $receiver_id);
        $route = route('panels.chatroom', $chatRoomId);
        return $route;
    }

    public function chat($chatRoomId)
    {
        return view('panels.chatroom')->with('roomId', $chatRoomId)->with('ownId', auth()->id());
    }

    public function getMessages($chatRoomId)
    {
        $data = [];
        $data['messages'] = Chat::getMessageByRoomId($chatRoomId);
        $chatRoom = ChatRoom::findOrFail($chatRoomId);
        $chatRoomTickets = json_decode($chatRoom->tickets_json);
        if (is_null($chatRoomTickets)) {
            $data['tickets'] = [];
        } else {

            foreach ($chatRoomTickets as $ticket) {
                $data['tickets'][] = Ticket::findOrFail($ticket);
            }
        }
        $chatRoom->small_id_participant == auth()->id() ?
            $otherPersonId = $chatRoom->big_id_participant :
            $otherPersonId = $chatRoom->small_id_participant;
        $data['other_person'] = User::findOrFail($otherPersonId);

        return $data;
    }

    public function sendMessage(Request $request, $chatRoomId)
    {
        $chat = Chat::saveChat($request->message, $chatRoomId);
        broadcast(new SendMessageEvent($chat))->toOthers();
        return $chat;
    }

    public function rateSolveTicket(Request $request)
    {
        $request->validate([
            'rateable_id' => 'required:exists:users,id',
            'rateable_type' => 'required',
            'rating' => 'required| max:5',
            'ticket_id' => 'required'
        ]);
        $rating = Rating::saveRating($request->all());
        $ticket = Ticket::findOrFail($request->ticket_id);
        $ticket->status = 'solved';
        $ticket->save();
        Mentor::updateMentorsRating();
        return $rating;
    }


    public function setTicket(Request $request, $chatRoomId)
    {
        $Ticket = Ticket::setTicket($request->description, $request->inquire, $chatRoomId, $request->type);
        $tickArr = [];
        $chatRoom = ChatRoom::findOrFail($chatRoomId);
        if ($chatRoom->tickets_json === null) {
            array_push($tickArr, $Ticket->id);
            $chatRoom->tickets_json = json_encode($tickArr);
           
        } else {
            $tickArr = json_decode($chatRoom->tickets_json);
            array_push($tickArr, $Ticket->id);
            $chatRoom->tickets_json = json_encode($tickArr);
        }

        $chatRoom->save();
        if($request->type == 'video'){
            $room = "videoRoom".$chatRoomId.rand(20, 7000);
            $token= $this->generateToken();
            $remoteParticipant = 5;
            $route = route('video.room', [$remoteParticipant, $room, $token]);
            $chat = Chat::saveChat($route, $chatRoomId);
            $chat->is_video = 1;
            $chat->save();
            $video = new VideoChat;
            $video->message_id = $chat->id;
            $video->token = $token;
            $video->room= $room;
            $video->remote_participant = $remoteParticipant;
            $video->save();
            broadcast(new SendMessageEvent($chat))->toOthers();
        }
        return true;
    }

    public function goToVideo($participants, $room, $token)
    {
        $message = Helper::packageActivity('video_calling');
        if($message != 'procced'){
            Session::flash('package-message', $message);
            return redirect('only-package');
        }
        return view('video')->with('participants', $participants)
        ->with('room', $room)
        ->with('myName', auth()->user()->first_name)
        ->with('token', $token);
    }
    public function generateToken()
    {
        $DEV_KEY = "0b7dcab09cfe4515adcc52db8ab7565b" ;            // Copy your dev key from vidyo.io dashboard
        $APP_ID = "503657.vidyo.io" ;    // Copy your app Id from vidyo.io dashboard
        $username = "user1" ;          // Username, hard coded for debug purposes
        $expiresInSecs = 1000 ;         // Generated token will expire after these many seconds
        $EPOCH_SECONDS = 62167219200 ;
        $expires = $EPOCH_SECONDS + $expiresInSecs + time();
        $jid = $username . "@" . $APP_ID ;
        //echo "JID: " . $jid . "<br />" ;

        // Must place \0 within double quotes, not single quotes.
        $body = "provision" . "\0" . $jid . "\0" . $expires . "\0" . "" ;
        $utf8_body = utf8_encode( $body ) ;
        $mac_hash = hash_hmac( "sha384", $utf8_body, $DEV_KEY ) ;
        $serialized = $utf8_body . "\0" . $mac_hash ;
        $b64_encoded = base64_encode( $serialized ) ;
        return $b64_encoded;

    }

    public function myMessage($userId)
    {
        $chatRooms = ChatRoom::where('small_id_participant', $userId)
            ->orWhere('big_id_participant', $userId)
            ->orderBy('created_at', 'DESC')->get();
        $message = [];
        foreach ($chatRooms as $room) {
            $chat = Chat::where('chat_room_id', $room->id)->latest('created_at')->first();

            if ($chat) {
                $message[] = [
                    'sender_first_name' => $chat->sender->first_name,
                    'sender_last_name' => $chat->sender->last_name,
                    'receiver_id' => $chat->receiver->id,
                    'chat_room_id' => $room->id,
                    'mentor_rating' => $chat->sender->hasRole('mentor') ? $chat->sender->mentor->rating : 0,
                    'sender_id' => $chat->sender->id,
                    'is_viewed' => $chat->is_viewed,
                    'time' => $chat->formated_time,
                    'message' => $chat->message,
                    'sender_image' => $chat->sender->profile_image
                ];
            }
        }
        return $message;
    }

    public function seeMessage($chatRoomId)
    {
        $chat = Chat::where('chat_room_id', $chatRoomId)->latest('created_at')->first();
        $chat->is_viewed = 1;
        $chat->save();
        return redirect()->route('panels.chatroom', $chatRoomId);
    }
}
