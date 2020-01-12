<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if ($request->user())
        {
            if ($request->user()->is_admin == 1)
            {
                return $next($request);
            } else {
                return redirect()->route('home')->with('warning_msg', 'No tiene permisos para acceder a este recurso');
            }
        }

        return redirect()->route('home')->with('warning_msg', 'No tiene permisos para acceder a este recurso');


    }
}
