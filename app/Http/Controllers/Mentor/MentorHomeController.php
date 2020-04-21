<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use App\Http\Controllers\Mentor\MentorController;

class MentorHomeController extends MentorController
{

    public function __construct()
    {
        // return $roles = auth()->user();
        // if(!auth()->user()->hasRole('mentor')){
        //     return 'you are not permited';
        // }
    }
    public function index()
    {   
        return view('panels.home');
    }
}
