<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('administrator.dashboard');
    }

    public function riwayat()
    {
        return view('administrator.user'); 
    }

    public function user()
    {
        return view('administrator.user'); 
    }
}
