<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use App\Model\ContactUs;
use App\Model\Mentor;
use App\Model\SuccessStory;
use App\Model\Tag;
use App\Model\Website;

class AdminHomeController extends AdminController
{

    public function index()
    {
        return view('panels.home');
    }

    public function trainee()
    {
        return view('panels.admin.trainee')->with('user_id', 'matulPermission');
    }

    public function mentor()
    {
        return view('panels.admin.mentor')->with('user_id', 'matulPermission');
    }

    public function changeSuccessStatus(Request $request)
    {
        $request->validate([
            'new_status' => 'required',
            'id' => 'required'
        ]);
        $story = SuccessStory::find($request->id);
        $story->status = $request->new_status;
        $story->save();
    }

    public function changeStatus(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status' => 'required'
        ]);
        return ContactUs::where('id', $request->id)->update(['status' => $request->status]);
    }

    public function getContactUs()
    {
        $contacts = ContactUs::orderBy('created_at', 'DESC')->get();
        return $contacts;
    }

    public function contactUs()
    {
        return view('panels.admin.contact');
    }

    public function website()
    {
        return view('panels.admin.website');
    }

    public function tag()
    {
        return view('panels.admin.tag');
    }

    public function getTag()
    {
        return Tag::get();
    }

    public function story()
    {
        return view('panels.admin.story');
    }

    public function saveTag(Request $request)
    {
        $tags = explode(',', $request->tags);
        return Tag::sync($tags);

    }

    public function updateWebsite(Request $request)
    {
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
