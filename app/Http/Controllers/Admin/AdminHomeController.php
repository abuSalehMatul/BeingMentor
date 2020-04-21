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
}
