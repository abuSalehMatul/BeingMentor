<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class Mentor extends Model
{
    protected $fillable = [
        'title', 'description', 'barcode', 'user_id', 'created_at', 'updated_at'
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

    public static function getMentorsByUserId($userId, Carbon $fromDate, Carbon $toDate)
    {
        if($userId == 'all')
        {
            return Mentor::
             whereDate('created_at', '>=', $fromDate->format('Y-m-d'))
            ->whereDate('created_at', '<=', $toDate->format('Y-m-d'))
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->paginate(15);

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
