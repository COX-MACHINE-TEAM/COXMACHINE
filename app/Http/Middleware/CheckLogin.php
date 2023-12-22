<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah login
        if (Auth::check()) {
            // Jika sudah login, izinkan akses ke halaman
            return $next($request);
        }

        // Jika belum login, redirect ke halaman login atau sesuai kebijakan Anda
        return redirect('/sign-in');
    }
}
