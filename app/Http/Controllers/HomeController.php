<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;

class HomeController extends Controller
{

    use  HasRoles;
    public function index()
    {
        return view('home');
    }

    public function findDashboard()
    {
        if (auth()->user()->hasRole('admin')) {
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
        if (auth()->user()->hasRole('admin')) {
            return auth()->user();
        }
        if (auth()->user()->hasRole('mentor')) {
            return auth()->user()->load('mentor');
        }
        if (auth()->user()->hasRole('trainee')) {
            return auth()->user()->load('trainee');
        }
    }
}
