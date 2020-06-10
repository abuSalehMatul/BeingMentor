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
        $shortTitle ="This is a dummy short title of this package....";
        $description = "Dolorum in tempore dolorum natus.
        Commodi similique ut placeat quo cumque sit. Ab nulla soluta et porro minima magni reiciendis tenetur. Saepe enim eius";
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 3; $i++) {
            $data = [
                'name' => $name[$i],
                'short_title' => $shortTitle,
                'description' => $description,
                'duration' => 12,
                'price' => 0,
                'chatting' => 2,
                'created_at' => now()

            ];
            Package::insert($data);
        }
    }
}
