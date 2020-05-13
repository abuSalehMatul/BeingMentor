<?php

use App\Model\Answer;
use Illuminate\Database\Seeder;
use App\Model\Mentor;
use App\Model\Question;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $userIds = Mentor::get()->pluck('user_id')->toArray();
        $questionId = Question::get()->pluck('id')->toArray();

        for($i=0; $i<40; $i++){
            $data = [
                'user_id' => $faker->randomElement($userIds),
                'answer' => $faker->text,
                'question_id' => $faker->randomElement($questionId),
                'created_at' => now()
            ];
            Answer::insert($data);
        }
    }
}
