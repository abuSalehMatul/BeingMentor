<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Trainee extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'created_at', 'updated_at'
    ];

    protected $appends = ['formated_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFormatedDateAttribute()
    {
        return $this->created_at->format('Y-m-d');
    }

    public static function updateByUserId($userId, $data)
    {
        return Trainee::updateOrCreate(
            ['user_id' => $userId],
            $data
        );
    }

    public static function getTraineeByUserId($userId, Carbon $fromDate, Carbon $toDate)
    {
        if($userId == 'matulPermission')
        {
            return Trainee::
             whereDate('created_at', '>=', $fromDate->format('Y-m-d'))
            ->whereDate('created_at', '<=', $toDate->format('Y-m-d'))
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        }
        elseif(is_numeric($userId)){
            $chatRoomSmall= auth()->user()->small_id_participant;
            $chatRoomBig = auth()->user()->big_id_participant;
            $traineeIds=[];
            foreach($chatRoomBig as $room){
                $trainee = Trainee::where('user_id',$room->small_id_participant)->first();
                if($trainee){
                    array_push($traineeIds, $trainee->id);
                }
                
            }
            foreach($chatRoomSmall as $room){
                $trainee = Trainee::where('user_id',$room->big_id_participant)->first();
                if($trainee){
                    array_push($traineeIds, $trainee->id);
                }
                
            }
            return Trainee::
             whereDate('created_at', '>=', $fromDate->format('Y-m-d'))
            ->whereDate('created_at', '<=', $toDate->format('Y-m-d'))
            ->whereIn('id', $traineeIds)
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        }
    }

}
