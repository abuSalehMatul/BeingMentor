<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name', 'duration', 'short_title', 'price', 'chatting',
        'video_calling', 'description', 'questions', 'icon'
    ];
}
