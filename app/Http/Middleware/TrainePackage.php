<?php

namespace App\Http\Middleware;

use App\Model\UserPackage;
use Closure;

class TrainePackage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userPackage =  UserPackage::where('user_id', auth()->id())
        ->latest('created_at')->first();
        $activePackage = UserPackage::where('user_id', auth()->id())->where('is_active', 1)->first();
        if($userPackage){
            if(!$activePackage){
                return redirect('paypal-page');
            }
            else{
                return $next($request);
            }
           
        }
        else{
            return redirect('only-package');
        }
       
    }
}
