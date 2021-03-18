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
                return redirect('login')->withErrors('Bạn không có quyền vào trang này');
            }
        } else {
            return redirect('login')->withErrors('Vui lòng kiểm tra lại email và mật khẩu');
        }
    }
}
