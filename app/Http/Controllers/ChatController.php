<?php

namespace App\Http\Controllers;

use App\Model\ChatRoom;
use App\Model\Chat;
use App\Model\Ticket;
use App\User;
use Illuminate\Http\Request;
use App\Events\SendMessageEvent;
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
            'rateable_id' => 'required:exists:tickets,id',
            'rateable_type' => 'required',
            'rating' => 'required| max:5'
        ]);
        $rating = Rating::saveRating($request->all());
        $ticket = Ticket::findOrFail($request->rateable_id);
        $ticket->status = 'solved';
        $ticket->save();
        $solver = Solve::create([
            'ticket_id' => $request->rateable_id,
            'solver_id' => $request->solver,
            'created_at' => now()
        ]);
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
}
