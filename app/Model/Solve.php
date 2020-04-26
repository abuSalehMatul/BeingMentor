<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Solve extends Model
{
    protected $fillable = ['ticket_id', 'solver_id' , 'created_at', 'updated_at'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
