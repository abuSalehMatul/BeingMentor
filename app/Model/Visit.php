<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['ip', 'page', 'last_visit'];
}
