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
            'logo' => 'wp-content/uploads/2020/04/logo.png',
            'email' => 'begin@gmai.com',
            'mobile' => '3344333',
            'footer_quote' => 'BeingMentor is an independent education platform with the goal to connect you with the mentor you deserve',
            'how_it_work_title1'=> 'Search Your Mentor',
            'how_it_work_title2'=> 'Apply For Mentorship',
            'how_it_work_title3'=> 'Consult',
            'why_us_description' => 'Step up your career game plan, prep up interviews, job search & promotion. Your mentor will listen to your doubts, give solutions (all drawn from their experience) and take you where you want to be',
            'quote_description1'=> 'Step up your career game plan, prep up interviews, job search & promotion. Your mentor will listen to your doubts, give solutions (all drawn from their experience) and take you where you want to be.',
            'quote_description2'=> 'You give the guidance, we handle the network, discoverability, mentee assignment, payment, tooling and knowledge transfers. Help young professionals around the world with reaching their goals.',
            'how_it_work_description1' => 'Nowadays, we consider BeingMentor to be powered by our over 100 mentors worldwide, It was initially built by a single person, on weekends and evenings.',
            'how_it_work_description2' => 'You can choose a mentor from our world’s best professional mentors and apply for their mentorship. All the mentors are we educated and keen to help everyone',
            'how_it_work_description3' => 'We are strong believers that education in some way should be accessible to everyone. In 2018 alone – our first year – we were able to help over 200 people find a mentor.',
            'index_description' => 'Our online platform connects students to life changing one-on-one academic support.'
        ];
        Website::insert($data);
    }
}
