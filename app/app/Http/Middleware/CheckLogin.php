<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Kiểm tra xem session 'user' có tồn tại hay không
        if ($request->session()->has('user')) {
            return redirect()->route('home');
        }

        // Nếu tồn tại, cho phép request tiếp tục xử lý
        return $next($request);
    }
}
