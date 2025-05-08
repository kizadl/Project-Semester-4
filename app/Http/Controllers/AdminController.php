<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('administrator.dashboard'); // Ini akan menampilkan file dashboard.blade.php kamu
        return view('administrator.riwayat'); // Ini akan menampilkan file dashboard.blade.php kamu
        return view('administrator.user'); // Ini akan menampilkan file dashboard.blade.php kamu
    }

    // public function riwayat()
    // {
    //     return view('administrator.riwayat');
    // }

    // public function user()
    // {
    //     return view('administrator.user');
    // }
}
