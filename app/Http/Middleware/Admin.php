<?php

namespace App\Http\Middleware;

use Closure;
use Exception;

class Admin
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
        if(!$request->user()->is_admin){
            throw new \Illuminate\Auth\Access\AuthorizationException ('Du bist kein Admin!');
        }

        return $next($request);
    }
}

