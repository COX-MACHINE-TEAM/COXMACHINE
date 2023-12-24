<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan formulir login
    public function showLoginForm()
    {
        return view('/sign-in');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect()->intended('admin.dashboard');
        }

        // Jika gagal login
        return redirect()->route('login')->with('error', 'Email atau password salah');
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('sign-in');
    }
}
