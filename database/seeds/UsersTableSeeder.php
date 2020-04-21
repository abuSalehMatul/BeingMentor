<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $roles = ['trainee', 'mentor'];
    public function run()
    {
        $this->createDataAndSeed();
    }

    public function createDataAndSeed()
    {
        $data = [];
        $faker = Faker\Factory::create();
        $password = bcrypt('secret');
        for ($i = 0; $i < 40; $i++) {
            $data =
                [
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'mobile' => rand(1232232343, 5644343465),
                    'email' => $faker->email,
                    'password' => $password,
                    'address' => $faker->address,
                    'status' => rand(0, 1),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            $user = App\User::create($data);
            $index = rand(0, 1);
            $user->assignRole($this->roles[$index]);
            if($index == 0){
                $user->trainee()->create([
                    'title' => $faker->title,
                    'description' => $faker->text,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
            else{
                $user->mentor()->create([
                    'title' => $faker->title,
                    'description' => $faker->text,
                    'barcode' => '#'. rand(100234,300456),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        $data = [];
        $data = [
            'first_name' => 'Admin',
            'last_name' => '',
            'mobile' => '01737190072',
            'email' => 'IamAdmin@example.com',
            'password' => $password,
            'address' => $faker->address,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
        $admin = App\User::create($data);
        $admin->assignRole('admin');
    }
}
