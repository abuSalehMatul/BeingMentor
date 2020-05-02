<?php

use App\Model\Ticket;
use App\User;
use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = User::get()->pluck('id')->toArray();
        $inquire = config('enums.inquires');
        $inquireArr = $inquire['Academic'];
        // array_push($inquireArr, $inquire['Professional']);
        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'barcode' => rand(0, 500) . '#' . rand(1, 4000),
                'description' => $faker->text,
                'inquire' => $faker->randomElement($inquireArr, 1),
                'opner_user_id' => $faker->randomElement($users, 1),
                'status' => $faker->randomElement(['pending', 'solved', 'canceled'], 1),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        $inquireArr = $inquire['Professional'];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'barcode' => rand(0, 500) . '#' . rand(1, 4000),
                'description' => $faker->text,
                'inquire' => $faker->randomElement($inquireArr, 1),
                'opner_user_id' => $faker->randomElement($users, 1),
                'status' => $faker->randomElement(['pending', 'solved', 'canceled'], 1),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        Ticket::insert($data);
    }
}
