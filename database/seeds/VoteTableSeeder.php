<?php

use App\Model\Answer;
use Illuminate\Database\Seeder;
use App\Model\Trainee;
use App\Model\Vote;
use App\Model\Question;

class VoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $userIds = Trainee::get()->pluck('user_id')->toArray();
        $answerIds = Answer::get()->pluck('id')->toArray();
        $vote = [1,0];
        for($i =0 ;$i< 20; $i++){
            $data = [
                'vote_giver' => $faker->randomElement($userIds),
                'vote' => $faker->randomElement($vote),
                'answer_id' => $faker->randomElement($answerIds),
                'created_at' => now()
            ];
            Vote::insert($data);
        }

    }
}
