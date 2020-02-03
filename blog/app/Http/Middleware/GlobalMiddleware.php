<?php

namespace App\Http\Middleware;

use Closure;

class GlobalMiddleware
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
        echo "This is from our global middleware";
        return $next($request);
    }
}
