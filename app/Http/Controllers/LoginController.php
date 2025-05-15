<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input email dan password
        $credentials = $request->only('email', 'password');

        // Cek apakah email dan password cocok
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        // Jika login gagal, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }
}
