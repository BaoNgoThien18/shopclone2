<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\RedirectResponse) $next
     */
    public function handle(Request $request, Closure $next)
    {

        // Kiểm tra xem session 'user' có tồn tại hay không
        if (!$request->session()->has('user')) {
            // Nếu không tồn tại, chuyển hướng đến trang đăng nhập
            return redirect('/auth/login');
        }

        // Nếu tồn tại, cho phép request tiếp tục xử lý
        return $next($request);
    }
}
