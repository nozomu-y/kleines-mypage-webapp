<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MemberAuth
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
        if (!session()->has('jwt_token') || session('jwt_token') == null) {
            session()->forget('jwt_token');
            session()->forget('user_id');
            return redirect()->route('login');
        }

        return $next($request);
    }
}
