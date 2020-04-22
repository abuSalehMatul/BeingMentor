<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;

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
}
