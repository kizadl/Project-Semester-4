<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.sign-in');
    }

    public function login_proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        dd(Auth::attempt($data));

        if(Auth::attempt($data)){
            return redirect()->route('administrator.dashboard');
        }else{
            return redirect()->route('sign-in')->with('failed', 'Email atau Password Salah');
        }
    }
}
