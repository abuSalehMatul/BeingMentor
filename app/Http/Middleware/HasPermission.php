<?php

namespace App\Http\Middleware;

use Closure;

class HasPermission
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
        $route = $request->route();
        $permission = $route->action['as'] ?? $request->getRequestUri();
        return app(\Spatie\Permission\Middlewares\PermissionMiddleware::class)->handle($request, $next, $permission);
    }
}
