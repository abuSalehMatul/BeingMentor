<?php

namespace App\Http\Controllers\Trainee;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TraineeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // $user= auth()->user();
        // $roles = $user->getRoleNames();
        // if(!in_array('trainee', $roles->toArray())){
        //     return 'you are not permited';
        // }
    }
}
