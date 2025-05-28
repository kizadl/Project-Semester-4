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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                Alert::success('Halo ' . $user->name, 'Selamat Datang di Dashboard Admin');
                return redirect()->route('dashboard');
            } else {
                Alert::success('Halo ' . $user->name, 'Selamat Datang di HeartGuard');
                return redirect()->route('user.home');
            }
        }

        Alert::error('Error', 'Email atau password salah.');
        return back()->withInput();
    }
}
