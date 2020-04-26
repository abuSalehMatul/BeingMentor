<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Model\ChatRoom;

class Chat extends Model
{
    protected $fillable = [
        'chat_room_id', 'message', 'is_file', 'created_at', 'updated_at'
    ];
    protected $appends = ['sender_user', 'receiver_user', 'formated_time'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function getSenderUserAttribute()
    {
        return $this->sender;
    }

    public function getReceiverUserAttribute()
    {
        return $this->receiver;
    }

    public function getFormatedTimeAttribute()
    {
        return $this->created_at->format('y-m-d');
    }

    public static function getMessageByRoomId($roomId)
    {
        return  Chat::where('chat_room_id', $roomId)->get();
    }

    public static function saveChat($message ,$chatRoomId)
    {
        $chatRoom = ChatRoom::findOrFail($chatRoomId);
        $chatRoom->small_id_participant == auth()->id() ?
        $otherPersonId = $chatRoom->big_id_participant :
        $otherPersonId = $chatRoom->small_id_participant;
        $chat = new Chat;
        $chat->chat_room_id = $chatRoomId;
        $chat->message = $message;
        $chat->sender_id= auth()->id();
        $chat->receiver_id= $otherPersonId;
        $chat->save();
        return $chat;
    }
}
