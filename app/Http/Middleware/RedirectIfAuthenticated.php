<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    private const GUARD_USER = 'users'; // config/auth.phpで設定したguard配列内のkeyと合わせる
    private const GUARD_OWNER = 'owners';
    private const GUARD_ADMIN = 'admin';

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        if(Auth::guard(self::GUARD_USER)->check() && $request->route('user.*')) {
            return redirect(RouteServiceProvider::HOME);
        }
        if(Auth::guard(self::GUARD_OWNER)->check() && $request->route('owner.*')) {
            return redirect(RouteServiceProvider::OWNER_HOME);
        }
        if(Auth::guard(self::GUARD_ADMIN)->check() && $request->route('admin.*')) {
            return redirect(RouteServiceProvider::ADMIN_HOME);
        }

        return $next($request);
    }
}
