<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //In below code it is check request comes from login page 
        //and request have session and its name is user it will 
        //redirect it to order page login code is on usercontroller
        if($request->path()=="login" && $request->session()->has('user')){

            return redirect("product");
        }
        return $next($request);
    }
}
