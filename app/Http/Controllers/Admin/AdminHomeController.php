<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use App\Model\Mentor;
use App\Model\Website;

class AdminHomeController extends AdminController
{

    public function index()
    {
        return view('panels.home');
    }

    public function trainee()
    {
        return view('panels.admin.trainee')->with('user_id', 'all');
    }

    public function mentor()
    {
        return view('panels.admin.mentor')->with('user_id', 'all');
    }



    public function contactUs()
    {
    }

    public function website()
    {
        return view('panels.admin.website');
    }

    public function updateWebsite(Request $request)
    {
      //  return $request;
        $textData =  $request->only([
            'email', 'mobile',
            'mobile1', 'address',
            'about_us', 'how_it_works',
            'term_policy', 'footer_quote', 'quote_title1',
            'quote_title2', 'quote_description1', 'quote_description2',
            'index_description', 'how_it_work_description1', 'how_it_work_description2',
            'how_it_work_description3', 'why_us_description',
            'how_it_work_title1', 'how_it_work_title2', 'how_it_work_title3'
        ]);
        Website::updateTextData($textData);
        $imageData = ['logo', 'how_it_work_image_one', 'how_it_work_image_two', 'how_it_work_image_three'];
        foreach ($imageData as $data) {
            if ($request->hasFile($data)) {
                Website::updateImage($request->file($data), $data);
            }
        }

        // if ($request->hasFile('how_image3')) {
        //     Website::updateImage($request->file('how_image3'), 'how_it_work_image_three');
        // }
        // if ($request->hasFile('logo')) {
        //     Website::updateImage($request->file('logo'), 'how_it_work_image_three');
        // }
        // if ($request->hasFile('how_it_work_image_one')) {
        //     Website::updateImage($request->file('how_it_work_image_one'), 'how_it_work_image_one');
        // }
        // if ($request->hasFile('how_it_2')) {
        //     Website::updateImage($request->file('how_it_2'), 'how_it_work_image_two');
        // }
       // die();
        return redirect()->back();
    }

    public function forum()
    {
    }


    public function delMentor($mentorId)
    {
        return Mentor::deleteUser($mentorId);
    }

    public function activeMentor($mentorId)
    {
        return Mentor::activeUser($mentorId);
    }
}
