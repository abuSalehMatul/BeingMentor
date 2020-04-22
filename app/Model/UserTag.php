<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tag;

class UserTag extends Model
{
    protected $fillable = [
        'user_id', 'tag_id', 'created_at', 'updated_at'
    ];
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }



    public static function getTagNameByUserId($userId)
    {
        $userTag = UserTag::where('user_id', $userId)->get();
        $tags = [];
        foreach ($userTag as $tg) {
            array_push($tags, $tg->tag->tag);;
        }
        return $tags;
    }

    public static function syncByUserId($userId, $tags)
    {
        UserTag::where('user_id', $userId)->delete();
        foreach ($tags as  $tagNames) {
            $tagArray = explode(',', $tagNames);
            foreach ($tagArray as $tagName) {
                $tag = Tag::where('tag', $tagName)->first();
                UserTag::create([
                    'user_id' => $userId,
                    'tag_id' => $tag->id,
                    'created_at' => now()
                ]);
            }
        }
        return UserTag::where('user_id', $userId)->get();
    }
}
