<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'chat_room_id', 'message', 'is_file', 'created_at', 'updated_at'
    ];
}
