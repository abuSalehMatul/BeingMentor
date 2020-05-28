<?php

namespace App;

use App\Model\Package;
use App\Model\UserActivity;
use App\Model\UserPackage;
use Session;
use Carbon\Carbon;

class Helper
{

    public static function packageActivity($onType)
    {
        $userPackage = UserPackage::where('user_id', auth()->id())
            ->where('is_active',  1)
            ->latest('created_at')->first();
        if (!$userPackage) {
            return 'Please Select a Package to Continue!';
        }
        $created_at = Carbon::parse($userPackage->created_at);

        $package = Package::findOrFail($userPackage->package_id);
        $diff = Carbon::now()->floatDiffInMonths($created_at);
        // dd($package->duration);
        if ($package->duration < (int) $diff) {
            return 'Your Package been expired!';
        }
        $quantity = $package->$onType;
        $usedQuantity = UserActivity::where('user_id', auth()->id())->where($onType, 1)->count();
        // dd($package);
        if ($usedQuantity < $quantity) {
            $activity = new UserActivity();
            $activity->user_id = auth()->id();
            $activity->$onType = 1;
            $activity->save();
            return 'procced';
        } else {
            return "Please Upgrade Your Package";
        }
    }
}
