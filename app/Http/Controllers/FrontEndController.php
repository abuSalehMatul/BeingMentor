<?php

namespace App\Http\Controllers;

use App\Model\Mentor;
use App\Model\Tag;
use App\Model\Ticket;
use App\Model\Trainee;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use App\Model\UserTag;
use Symfony\Component\CssSelector\Node\FunctionNode;

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

    public Function statistics()
    {
        $mentors = Mentor::count();
        $tickets = Ticket::count();
        $solved = Ticket::where('status', 'solved')->count();
        $online = 
    }

}
