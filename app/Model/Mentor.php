<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Collection;

class Mentor extends Model
{
    protected $fillable = [
        'title', 'description', 'barcode', 'user_id', 'created_at', 'updated_at', 'rating'
    ];

    protected $appends = ['tags', 'formated_date'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTagsAttribute()
    {
        return UserTag::getTagNameByUserId($this->user->id);
    }

    public function getFormatedDateAttribute()
    {
        return $this->created_at->format('Y-m-d');
    }

    public static function updateByUserId($userId, $data)
    {
        return Mentor::updateOrCreate(
            ['user_id' => $userId],
            $data
        );
    }

    public static function getMentorsByUserId($userId, Carbon $fromDate, Carbon $toDate, $key = "")
    {
        if ($userId == 'matulPermission') {
            return Mentor::whereDate('created_at', '>=', $fromDate->format('Y-m-d'))
                ->whereDate('created_at', '<=', $toDate->format('Y-m-d'))
                ->where(function ($q) use ($key) {
                    if (strlen($key) > 0) {
                        $q->whereIn('id', self::getMentorIds($key));
                    }
                })

                ->with('user')
                ->whereHas('user', function ($query) use ($userId) {
                    if ($userId != 'matulPermission') {
                        $query->where('status', 1);
                    }
                })
                ->orderBy('created_at', 'DESC')
                ->paginate(15);
        }
        if ($userId == 'front' || $userId== "website") {
            return Mentor::where(function ($q) use ($key) {
                    if (strlen($key) > 0) {
                        $q->whereIn('id', self::getMentorIds($key));
                    }
                })
                ->with('user')
                ->whereHas('user', function ($query) use ($userId) {
                    if ($userId != 'matulPermission') {
                        $query->where('status', 1);
                    }
                })
                ->orderBy('rating', 'DESC')
                ->paginate(15);
        }
    }

    public static function getMentorIds($key)
    {

        $ids = self::getMentorIdsByUserName($key);
        $ids1 = self::getMentorIdsByTagName($key);
        foreach ($ids1 as $id) {
            array_push($ids, $id);
        }
        return $ids;
    }

    public static function getMentorIdsByUserName($key)
    {
        $ids = DB::table('mentors')->join('users', 'mentors.user_id', '=', 'users.id')
            ->select('mentors.id')
            ->where('first_name', 'like', '%' . $key . '%')
            ->orWhere('last_name', 'like', '%' . $key . '%')
            ->get();
        $array = [];
        foreach ($ids as $id) {
            array_push($array, $id->id);
        }
        return $array;
    }

    public static function getMentorIdsByTagName($key)
    {
        $ids = DB::table('mentors')->join('users', 'mentors.user_id', '=', 'users.id')
            ->rightJoin('user_tags', 'users.id', '=', 'user_tags.user_id')
            ->join('tags', 'user_tags.tag_id', '=', 'tags.id')
            ->select('mentors.id')
            ->where('tags.tag', 'like', '%' . $key . '%')
            ->get();
        $array = [];
        foreach ($ids as $id) {
            array_push($array, $id->id);
        }
        return $array;
    }

    public static function updateMentorsRating()
    {
        $ratingsByUser = Rating::get()->groupBy('rateable_id');
        foreach ($ratingsByUser as $userId => $ratings) {
            $ratingArr = [];
            foreach ($ratings as $rating) {
                array_push($ratingArr, $rating->rating);
            }
            if (sizeof($ratingArr) > 0) {
                $rate = array_sum($ratingArr) / sizeof($ratingArr);
            } else {
                $rate = 0;
            }
            $mentor = Mentor::where('user_id', $userId)->first();
            if ($mentor) {
                $rate = (float) $rate;
                $rate = round($rate, 2);
                $mentor->rating = $rate;
                $mentor->save();
            }
        }
    }


    public static function activeUser($mentorId)
    {
        $mentor = Mentor::findOrFail($mentorId);
        return User::where('id', $mentor->user->id)->update(['status' => 1]);
    }

    public static function deleteUser($mentorId)
    {
        $user = User::where('id', Mentor::findOrFail($mentorId))->delete();
        Mentor::where('id', $mentorId)->delete();
    }
}
