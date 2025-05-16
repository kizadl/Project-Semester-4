<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::success('Halo ' . Auth::user()->name, 'Selamat Datang di HeartGuard');
            return redirect('/dashboard');
        }

        // Jika login gagal, kembali ke halaman login dengan error
        Alert::error('Error', 'Email atau password salah.');
        return back()->withInput();
    }
}
