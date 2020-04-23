<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{

    protected $fillable = [
        'logo', 'email', 'address', 'mobile', 'mobile1',
        'about_us', 'term_policy', 'how_it_works', 'footer_quote',
        'how_it_work_image_one', 'how_it_work_image_two', 'how_it_work_image_three',
        'quote_title1', 'quote_title2', 'quote_description1', 'quote_description2',
        'index_description', 'how_it_work_description1', 'how_it_work_description2',
        'how_it_work_description3', 'why_us_description', 'how_it_work_title1',
        'how_it_work_title2', 'how_it_work_title3'
    ];

    public static function updateTextData($textData)
    {
       return  Website::first()->update($textData);
    }

    public static function updateImage($file, $field)
    {
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =env('APP_URL').'/websiteImage'.'/'. rand(100, 30000).time().'.'.$extension;
        $file->move('websiteImage/', $filename);
        return Website::first()->update([$field => $filename]);
    }
}
