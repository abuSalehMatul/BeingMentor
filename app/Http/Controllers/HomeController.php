<?php

namespace App\Http\Controllers;

use App\Model\Mentor;
use App\Model\Tag;
use App\Model\Trainee;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use App\Model\UserTag;

class HomeController extends Controller
{

    use  HasRoles;
    public function index()
    {
        if(auth()->check()){
            if(auth()->user()->hasRole('trainee')){
                
            }
        }
        return view('newHome');
    }

    public function findDashboard()
    {
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('root')) {
            return redirect()->route('panels.admin.index');
        }
        if (auth()->user()->hasRole('mentor')) {
            return redirect()->route('panels.mentor.index');
        }
        if (auth()->user()->hasRole('trainee')) {
            return redirect()->route('panels.trainee.index');
        }
    }

    public function showProfile()
    {
        return view('panels.profile');
    }

    public function getProfile()
    {
        $data =[];
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('root')) {
            $data['data'] = auth()->user();
            return $data;
        }
        if (auth()->user()->hasRole('mentor')) {

            $data['data'] = auth()->user()->load('mentor');
            $data['user_tags'] = UserTag::getTagNameByUserId(auth()->id());
            $data ['all_tags'] = Tag::getTagName();
            return $data;
        }
        if (auth()->user()->hasRole('trainee')) {
            $data['data'] = auth()->user()->load('trainee');
            return $data;
        }
    }

    public function updateProfile(Request $request)
    {
        $update = User::updateUserById($request->only([
            'first_name',
            'last_name',
            'email',
            'mobile',
            'address',
        ]), auth()->id());
        if($update){
            if ($request->hasFile('image')) {
                User::updateProfileImageById(auth()->id(), $request->file('image'));
            }
        }
        if (auth()->user()->hasRole('mentor')) {
            Mentor::updateByUserId(auth()->id(), $request->only(['title', 'description']));
            UserTag::syncByUserId(auth()->id(), $request->only('tags'));
        }
        if (auth()->user()->hasRole('trainee')) {
            Trainee::updateByUserId(auth()->id(), $request->only(['title', 'description']));
        }
        return true;
    }

    public function getRole()
    {
        if(auth()->user()->hasRole('admin')){
            return 'admin';
        }
        if(auth()->user()->hasRole('mentor')){
            return 'mentor';
        }
        if(auth()->user()->hasRole('trainee')){
            return 'trainee';
        }
        if(auth()->user()->hasRole('root')){
            return 'root';
        }
    }
}
