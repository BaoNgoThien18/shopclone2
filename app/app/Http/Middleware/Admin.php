<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Kiểm tra xem session 'user' có tồn tại hay không
        if (!$request->session()->has('user')) {
        return redirect()->route('login');
        }

        if (User::find(session('user'))['level'] != 'admin') {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
