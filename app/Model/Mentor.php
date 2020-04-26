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
        if ($userId == 'matulPermission' || $userId == 'front') {
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
        $solves = Solve::orderBy('solver_id')->get();

        if (isset($solves[0])) {
            $currentSolver = $solves[0]->solver_id;

            $ratingsArr = [];
            for ($i=0; $i<sizeof($solves); $i++) {
                if($solves[$i]->solver_id != $currentSolver || $i == sizeof($solves)-1){
                    return array_sum($ratingsArr) ;
                    $userRating = array_sum($ratingsArr) / sizeof($ratingsArr);

                    $mentor = Mentor::where('user_id', $solves[$i]->solver_id);
                    $mentor->raging = $userRating;
                    $mentor->save();
                    $ratingsArr = [];
                    $currentSolver = $solves[$i]->solver_id;
                }
                $ratings = optional($solves[$i]->ticket)->rating;

                if (!is_null($ratings)) {
                    foreach ($ratings as $rating) {

                        array_push($ratingsArr, $rating->rating);
                    }
                }
                print_r($ratingsArr);
              //  return array_sum($ratingsArr);
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
