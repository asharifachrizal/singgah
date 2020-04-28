<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class VisitorMiddleware
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
        if(Sentinel::check())
            if(Sentinel::getUser()->roles()->first()->slug == 'visitor')
                return $next($request);
            else
                return abort(404);
        else
            return redirect()->route('login');

        // if(Sentinel::check())
        //     return $next($request);
        // else{
        //     if($request->ajax()){
        //         return $next($request);
        //     }
        //     else
        //     {
        //         return redirect()->route('login');
        //     }

        // }
    }
}
