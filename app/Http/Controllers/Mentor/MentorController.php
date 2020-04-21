<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

class MentorController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {  // return true;
       
    }
}
