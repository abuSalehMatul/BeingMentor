<?php

namespace App\Http\Controllers;

use App\Model\Mentor;
use App\Model\Tag;
use App\Model\Trainee;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use App\Model\UserTag;

class FrontEndController extends Controller
{

    use  HasRoles;

    public function mentor()
    {
        $userId = 'front';
        return view('mentor')->with('user_id',$userId);
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function contactUs()
    {

    }

}
