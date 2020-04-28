<?php

namespace App;

use App\Model\ChatRoom;
use App\Model\Mentor;
use App\Model\Tag;
use App\Model\Trainee;
use App\Model\UserTag;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Model\Rating;
class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'address', 'mobile', 'status', 'email', 'password', 'profile_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relationss

    public function mentor()
    {
        return $this->hasOne(Mentor::class);
    }

    public function trainee()
    {
        return $this->hasOne(Trainee::class);
    }

    public function userTags()
    {
        return $this->hasMany(UserTag::class);
    }

    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }

    public function small_id_participant()
    {
        return $this->hasMany(ChatRoom::class, 'small_id_participant');
    }

    public function big_id_participant()
    {
        return $this->hasMany(ChatRoom::class, 'big_id_participant');
    }


    //static method ...
    public static function updateUserById($userData, $userId)
    {
        return User::where('id', $userId)->update($userData);
    }

    public static function updateProfileImageById($userId, $file)
    {
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =env('APP_URL').'/profileImage'.'/'. rand(100, 30000).time().'.'.$extension;
        $file->move('profileImage/', $filename);
        return User::where('id', $userId)->update(['profile_image' => $filename]);
    }
    //end of static methods

}
