<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'barcode', 'description', 'opner_user_id', 'status', 'created_at', 'updated_at'
    ];
}
