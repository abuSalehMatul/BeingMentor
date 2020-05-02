<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'barcode', 'description', 'opner_user_id', 'status', 'inquire', 'created_at', 'updated_at'
    ];

    public static function setTicketByChatRoomId($description, $inquire, $chatRoomId)
    {
        $ticket = new Ticket;
        $ticket->description =$description;
        $ticket->inquire= $inquire;
        $ticket->barcode = '#'. rand(3440,7000). '@'. rand(200,6000);
        $ticket->opner_user_id = auth()->id();
        $ticket->save();
        return $ticket;
    }

    public function rating()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }
}
