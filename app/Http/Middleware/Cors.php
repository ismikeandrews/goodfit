<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    public function handle($request, Closure $next)
    {
       return $next($request)
        ->header('Access-Control-Allow-Origin', '*') //Now is working for all, but you can type your domain instead of '*'
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }
}
