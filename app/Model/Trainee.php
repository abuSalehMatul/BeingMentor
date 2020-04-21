<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'created_at', 'updated_at'
    ];
}
