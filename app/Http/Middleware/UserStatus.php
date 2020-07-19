<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserStatus
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
        //Este middleware verifica que el usuario esté inhabilitado en la plataforma
        $user = Auth::user();

        if ($user != null) {
            if ($user->active) {
                return $next($request);
            } else {
                Auth::logout() ;
                return redirect('login');
            }
        } else {
            return $next($request);
        }
    }
}