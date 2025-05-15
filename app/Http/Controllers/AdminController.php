<?php

namespace App\Http\Controllers;

use App\Models\Heart;
use App\Models\Klasifikasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $typical = Heart::where('cp', 0)->count();
        $atypical = Heart::where('cp', 1)->count();
        $non_anginal = Heart::where('cp', 2)->count();
        $asymptomatic = Heart::where('cp', 3)->count();

        $target_0 = Heart::where('target', 0)->count();
        $target_1 = Heart::where('target', 1)->count();

        $klasifikasi_ada = Klasifikasi::where('hasil_klasifikasi', 'Punya Penyakit Jantung')->count();
        $klasifikasi_tidak = Klasifikasi::where('hasil_klasifikasi', 'Tidak Punya Penyakit Jantung')->count();

        return view('admin.dashboard', compact('typical', 'atypical', 'non_anginal', 'asymptomatic', 'target_0', 'target_1', 'klasifikasi_ada', 'klasifikasi_tidak'));
    }

    public function riwayat()
    {
        $riwayat = Klasifikasi::all();
        return view('admin.riwayat', compact('riwayat'));
    }

    public function user()
    {
        return view('admin.user');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
