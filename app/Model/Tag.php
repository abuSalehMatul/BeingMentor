<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{


    public static function getTagName()
    {
        return Tag::get()->pluck('tag');
    }
}
