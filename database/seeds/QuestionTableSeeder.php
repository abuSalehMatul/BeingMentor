<?php


use App\Model\Question;
use Illuminate\Database\Seeder;
use App\Model\Tag;
use App\Model\Trainee;

class QuestionTableSeeder extends Seeder
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
        $tagNames = Tag::get()->pluck('tag')->toArray();
        for($i=0; $i<50; $i++){
            $data = [
                'user_id' => $faker->randomElement($userIds),
                'title' => $faker->title,
                'question' => $faker->text,
                'tag'=> $faker->randomElement($tagNames),
                'created_at' => now(),
                'updated_at' => now()
            ];
            Question::insert($data);
        }
    }
}
