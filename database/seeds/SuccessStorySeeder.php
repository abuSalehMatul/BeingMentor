<?php

use App\Model\SuccessStory;
use App\Model\Trainee;
use Illuminate\Database\Seeder;
use App\User;

class SuccessStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = Trainee::get()->pluck('user_id')->toArray();
        for($i = 0 ;$i< 20 ; $i++){
            $data = [
                'user_id' => $faker->randomElement($users),
                'status' => 1,
                'story' => $faker->sentence(30, true),
                'created_at' => now()
            ];
            SuccessStory::insert($data);
        }
    }
}
