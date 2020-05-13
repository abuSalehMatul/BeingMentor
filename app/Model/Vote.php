<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
     protected $fillable = ['vote_giver', 'answer_id', 'vote', 'created_at'];
}
