<?php

namespace App;

use App\Model\Package;
use App\Model\UserActivity;
use App\Model\UserPackage;

class Helper{


    public static function packageActivity($onType)
    {
        $userPackage = UserPackage::where('user_id', auth()->id())->latest('created_at')->first();
        if(!$userPackage){
            return 'Please Select a Package';
        }
        $package = Package::findOrFail($userPackage->package_id);
        $quantity = $package->$onType;
        $usedQuantity = UserActivity::where('user_id', auth()->id())->where($onType, 1)->count();
        if($usedQuantity < $quantity){
            $activity = new UserActivity();
            $activity->user_id = auth()->id();
            $activity->$onType = 1;
            $activity->save();
            return true;
        }
        else{
            return "Please Upgrade Your Package";
        }
    }
}