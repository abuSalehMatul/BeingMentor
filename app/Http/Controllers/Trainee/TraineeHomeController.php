<?php

namespace App\Http\Controllers\Trainee;

use Illuminate\Http\Request;
use App\Http\Controllers\Trainee\TraineeController;

class TraineeHomeController extends TraineeController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return view('panels.home');
    }
}
