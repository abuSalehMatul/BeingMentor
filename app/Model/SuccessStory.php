<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    protected $fillable = ['story', 'status', 'user_id'];

    protected $appends = ['user', 'formated_time'];

    public function getUserAttribute()
    {
        return User::find($this->user_id);
    }

    public function getFormatedTimeAttribute()
    {
        return $this->created_at->format('y-m-d');
    }
}
