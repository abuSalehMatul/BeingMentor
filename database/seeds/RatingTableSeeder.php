<?php

use App\Model\Rating;
use App\Model\Ticket;
use App\User;
use Illuminate\Database\Seeder;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $userIds = User::get()->pluck('id')->toArray();
        $ticketIds = Ticket::get()->pluck('id')->toArray();
        $data = [];
        for($i =0 ; $i<30; $i++)
        {
            $data[]=[
                'rateable_type' => 'App\\User',
                'rateable_id' => $faker->randomElement($userIds, 1),
                'ticket_id' => $faker->randomElement($ticketIds),
                'rating' => rand(1,5),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        Rating::insert($data);
    }
}
