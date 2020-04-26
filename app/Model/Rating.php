<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rateable_type', 'rateable_id', 'rating', 'comment', 'created_at', 'updated_at'
    ];

    public function rateable()
    {
        return $this->morphTo();
    }

    public static function saveRating($data)
    {
        return Rating::create($data);
    }
}
