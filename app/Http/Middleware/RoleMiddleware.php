<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ... $roles): Response
    {
        $user = Auth::user();

        foreach($roles as $role) {
            //jika role user saat ini sama dengan role yang di inginkan
            //maka lanjutkan ke controller (return next)
            if($user->role == $role) {
                return $next($request);
            }
        }
        
        // jika role tidak sesuai, lempar ke halaman  403
        return abort(403);
    }
}
