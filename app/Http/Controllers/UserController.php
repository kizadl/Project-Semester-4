<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function klasifikasi()
    {
        return view('user.klasifikasi');
    }

    public function profile()
    {
        return view('user.profile');
    }
}
