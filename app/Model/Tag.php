<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = ['tag' , 'created_at', 'updated_at'];

    public static function getTagName()
    {
        return Tag::get()->pluck('tag');
    }

    public static function sync($arr)
    {
        foreach($arr as $tag)
        {
            if(!Tag::where('tag', $tag)->first()){
                Tag::create(['tag' => $tag]);
            }
        }
        $tagAll = Tag::get();
        foreach($tagAll as $tag){
            if(!in_array($tag->tag, $arr)){
                $tag->delete();
            }
        }
    }
}
