<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    protected $fillable = [
        'small_id_participant', 'big_id_participant', 'tickets_json', 'created_at', 'updated_at'
    ];

    public static function findChatRoom($firstId, $secondId)
    {
        $small = '';
        $big = '';
        if ($firstId > $secondId) {
            $small = $secondId;
            $big = $firstId;
        } else {
            $small = $firstId;
            $big = $secondId;
        }
        $chatRoom = ChatRoom::where('small_id_participant', $small)
            ->where('big_id_participant', $big)
            ->first();
        if($chatRoom){
            return $chatRoom->id;
        }
        else{
            $chatRoom = new ChatRoom;
            $chatRoom->small_id_participant = $small;
            $chatRoom->big_id_participant = $big;
            $chatRoom->save();
            return $chatRoom;
        }

    }
}
