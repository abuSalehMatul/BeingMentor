<?php

namespace App\Http\Controllers;

use App\Model\ChatRoom;
use App\Model\Chat;
use App\Model\Ticket;
use App\User;
use Illuminate\Http\Request;
use App\Events\SendMessageEvent;
use App\Model\Mentor;
use App\Model\Rating;
use App\Model\Solve;

class ChatController extends Controller
{
    public function initialize(Request $request)
    {
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

            foreach($chatRoomTickets as $ticket){
                $data['tickets'][]= Ticket::findOrFail($ticket);
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
        $Ticket = Ticket::setTicketByChatRoomId($request->description, $chatRoomId);
        $tickArr = [];
        array_push($tickArr, $Ticket->id);
        $chatRoom = ChatRoom::findOrFail($chatRoomId);
        $chatRoom->tickets_json = json_encode($tickArr);
        $chatRoom->save();
        return true;
    }

    public function myMessage($userId)
    {   
         $chatRooms = ChatRoom::where('small_id_participant', $userId)
        ->orWhere('big_id_participant', $userId)
        ->orderBy('created_at', 'DESC')->get();
        $message = [];
        foreach($chatRooms as $room){
            $chat = Chat::where('chat_room_id', $room->id)->latest('created_at')->first();
           
            if($chat){
                $message[]=[
                    'sender_first_name' => $chat->sender->first_name,
                    'sender_last_name' => $chat->sender->last_name,
                    'receiver_id' => $chat->receiver->id,
                    'chat_room_id' => $room->id,
                    'mentor_rating' => $chat->sender->hasRole('mentor')? $chat->sender->mentor->rating: 0,
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
