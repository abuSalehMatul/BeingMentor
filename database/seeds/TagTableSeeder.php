<?php

use App\Model\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'javascript',
            'php',
            'css',
            'laravel',
            'math',
            'science',
            'arts',
            'business',
            'social science',
            'AI',
            'Machine learning'
        ];
        $data =[];
        foreach($tags as $tag){
            $data = [
                'tag' => $tag,
                'created_at' => now(),
                'updated_at' => now()
            ];
            Tag::create($data);
        }
    }
}
