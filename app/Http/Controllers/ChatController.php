<?php

namespace App\Http\Controllers;

use App\Model\ChatRoom;
use Illuminate\Http\Request;

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

}
