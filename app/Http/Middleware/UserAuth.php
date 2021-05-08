<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         //Elijah sunwa, here we are checking if path has been set and session called 'user' has been set
         if($request->path()=="login" && $request->session()->has('user'))
         {
             return redirect('/');
         }
        return $next($request);
    }
}
