<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
        'title', 'description', 'barcode', 'user_id', 'created_at', 'updated_at'
    ];


    public static function updateByUserId($userId, $data)
    {
        return Mentor::updateOrCreate(
            ['user_id' => $userId],
            $data
        );
    }

}
