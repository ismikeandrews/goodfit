<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
       $token = $request->header('APP_KEY');

       try {
           if($token === 'DBD0xnx6TUruCgM5fUaoMuO2u9I2RYZA'){
            return $next($request);
           }else{
            throw new \Exception("Sorry, Connection Refused");
           }
       } catch (\Exception $error) {
            return response()->json($error->getMessage(), 401);
       }
    }
}
