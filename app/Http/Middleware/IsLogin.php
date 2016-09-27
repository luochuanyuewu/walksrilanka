<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class IsLogin
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
        if (Session::has('islogin'))
            return $next($request);
        else
            return redirect(route('backend.login'));
    }
}
