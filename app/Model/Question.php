<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Question extends Model
{
    protected $fillable = ['user_id', 'title', 'question', 'is_solved', 'tag', 'status', 'created_at'];

    protected $appends = ['formated_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function getFormatedTimeAttribute()
    {
        return $this->created_at->format('y-m-d');
    }

    public static function getQuestions(Carbon $fromDate, Carbon $toDate, $user, $tag = 'all')
    {
        $questions = Question::whereDate('created_at', '>=', $fromDate->format('Y-m-d'))
            ->whereDate('created_at', '<=', $toDate->format('Y-m-d'))
            ->where(function ($query) use ($user) {
                if ($user != 'matulPermission') {
                    if ($user == 'trainee') {
                        return $query->where('user_id', auth()->id())
                            ->where('status', 1);
                    } elseif ($user == 'mentor') {
                        return $query->whereHas('answers', function ($q) {
                            return $q->where('user_id', auth()->id());
                        });
                    } else {
                        return $query->where('status', 1);
                    }
                }
            })
            ->where(function ($query) use ($tag) {
                if ($tag != 'all') {
                    return $query->where('tag', 'like', '%' . $tag . '%');
                }
            })
            ->orderBy('created_at', 'DESC')
            ->with(['answers.vote', 'user'])
            ->paginate(20);
        return $questions;
    }
}
