<?php

use App\Model\Tag;
use App\Model\UserTag;
use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
class UserTagTableSeeder extends Seeder
{
    use  HasRoles;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::get();
        $tags = Tag::get()->pluck('id')->toArray();
        foreach($users as $user){
            if($user->hasRole('mentor')){
                $rand_keys = array_rand($tags, 3);
                foreach($rand_keys as $index){
                    $data =[
                        'user_id' => $user->id,
                        'tag_id' => $tags[$index],
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                    UserTag::create($data);
                }
            }
        }
    }
}
