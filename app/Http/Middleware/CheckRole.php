<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole {
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->level == 1) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }
}
