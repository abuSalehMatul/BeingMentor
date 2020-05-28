<?php

namespace App\Http\Controllers;

use App\Model\UserPackage;
use Illuminate\Http\Request;

class UserPackageController extends Controller
{
    public function submitPackage(Request $request)
    {
        $request->validate([
            'package_id'=> 'required|exists:packages,id'
        ]);
        $userPackage = new UserPackage();
        $userPackage->package_id = $request->package_id;
        $userPackage->user_id = auth()->id();
        $userPackage->save();
        return redirect('/paypal-page');
    }
}
