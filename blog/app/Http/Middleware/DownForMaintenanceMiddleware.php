<?php

namespace App\Http\Middleware;

use Closure;

class DownForMaintenanceMiddleware
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
        if(env("APP_ENV") == "local") {
            return redirect('/maintenance');
        }
        return $next($request);
    }
}
