<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VideoChat extends Model
{
     protected $fillable = ['message_id', 'remote_participant', 'room', 'token', 'created_at', 'updated_at'];
}
