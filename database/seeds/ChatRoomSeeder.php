<?php

use App\Model\ChatRoom;
use App\Model\Mentor;
use App\Model\Ticket;
use App\Model\Trainee;
use Illuminate\Database\Seeder;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $mentors = Mentor::get()->pluck('user_id')->toArray();
        $trainees = Trainee::get()->pluck('user_id')->toArray();
        $tickets = Ticket::get()->pluck('id')->toArray();
        $data = [];
        for($i =0; $i<30; $i++)
        {
            $data[]=[
                'small_id_participant' => $faker->randomElement($mentors, 1),
                'big_id_participant' => $faker->randomElement($trainees, 1),
                'tickets_json' => json_encode($faker->randomElements($tickets , 3)),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        ChatRoom::insert($data);
    }
}
