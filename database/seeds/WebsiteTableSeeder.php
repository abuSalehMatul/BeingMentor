<?php

use App\Model\Website;
use Illuminate\Database\Seeder;

class WebsiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'logo' => 'web.png',
            'email' => 'begin@gmai.com',
            'mobile' => '3344333'
        ];
        Website::insert($data);
    }
}
