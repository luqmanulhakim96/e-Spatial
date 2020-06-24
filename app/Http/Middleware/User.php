<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//     public function handle($request, Closure $next)
//     {
//         return $next($request);
//     }
/**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
   public function handle($request, Closure $next)
   {
       if (!Auth::check()) {
           return redirect()->route('login');
       }

       if (Auth::user()->role == 0 || Auth::user()->role == 1 || Auth::user()->role == 2 || Auth::user()->role == 3) {
           return redirect()->route('admin.dashboard');
       }

       if (Auth::user()->role == 4) {
            return $next($request);
           // return redirect()->route('user.halaman-utama');
       }
   }
}
