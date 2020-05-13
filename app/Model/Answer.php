<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['answer', 'user_id', 'question_id', 'is_solver', 'created_at'];
    protected $appends = ['formated_time', 'user'];

    public function vote()
    {
        return $this->hasMany(Vote::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFormatedTimeAttribute()
    {
        return $this->created_at->format('y-m-d');
    }

    public function getUserAttribute()
    {
        return User::findOrFail($this->user_id);
    }
}
