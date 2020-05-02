<?php

namespace App\Http\Middleware;

use App\Model\Visit;
use Carbon\Carbon;
use Closure;

class VisitCount
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
        $path = $request->path();
        $pathMap = config('enums.url');
        $urls = array_keys($pathMap);
        $ip = $request->ip();
        $matchPage = '';
        foreach ($urls as $url) {
            if ($path == $url) {
                $matchPage = $pathMap[$url];
                break;
            }
        }
        if ($matchPage) {
            $lastVisit = Visit::where('ip', $ip)
                ->where('page', $matchPage)
                ->latest('last_visit')
                ->first();
            if($lastVisit){
                $last = Carbon::parse($lastVisit->last_visit);
                if($last->diffInMinutes(Carbon::now()) > 5){
                    $this->saveVisit($ip, $matchPage);
                }
            }
            else{
                $this->saveVisit($ip, $matchPage);
            }    
        }
        return $next($request);
    }

    private function saveVisit($ip, $page)
    {
        $visit = new Visit;
        $visit->ip = $ip;
        $visit->page = $page;
        $visit->last_visit = now();
        $visit->save();
    }
}
