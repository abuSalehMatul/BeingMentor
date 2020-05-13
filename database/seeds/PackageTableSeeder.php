<?php

use App\Model\Package;
use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Normal', 'Silver', 'Gold'];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 3; $i++) {
            $data = [
                'name' => $name[$i],
                'short_title' => $faker->sentence(4, true),
                'description' => $faker->text,
                'duration' => 12,
                'price' => 0,
                'chatting' => 2,
                'created_at' => now()

            ];
            Package::insert($data);
        }
    }
}
