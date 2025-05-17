<?php

namespace App\Http\Controllers;

use App\Models\Heart;
use App\Models\Klasifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

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

        $laki_laki_ada = Klasifikasi::where('jenis_kelamin', "1")->where('hasil_klasifikasi', 'Punya Penyakit Jantung')->count();
        $laki_laki_tidak = Klasifikasi::where('jenis_kelamin', "1")->where('hasil_klasifikasi', 'Tidak Punya Penyakit Jantung')->count();

        $perempuan_ada = Klasifikasi::where('jenis_kelamin', "0")->where('hasil_klasifikasi', 'Punya Penyakit Jantung')->count();
        $perempuan_tidak = Klasifikasi::where('jenis_kelamin', "0")->where('hasil_klasifikasi', 'Tidak Punya Penyakit Jantung')->count();

        return view('admin.dashboard', compact('typical', 'atypical', 'non_anginal', 'asymptomatic', 'target_0', 'target_1', 'klasifikasi_ada', 'klasifikasi_tidak', 'laki_laki_ada', 'laki_laki_tidak', 'perempuan_ada', 'perempuan_tidak'));
    }

    public function riwayat()
    {
        $riwayat = Klasifikasi::all();
        return view('admin.riwayat', compact('riwayat'));
    }

    public function user()
    {
        $user = User::all();
        return view('admin.user', compact('user'));
    }

    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('admin.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        try {
            $user = User::find(auth()->user()->id);
            $user->name = $request->name;

            if ($request->hasFile('image')) {
                Storage::delete('public/images/' . $user->image);

                $image = $request->file('image');
                $image->storeAs('public/images', $image->hashName());
                $user->image = $image->hashName();
            }
            $user->save();

            Alert::success('Success', 'Profile berhasil diubah');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal mengubah profile');
            return redirect()->back();
        }
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = auth()->user();

        // Cek password lama
        if (!Hash::check($request->current_password, $user->password)) {
            Alert::error('Error', 'Password lama salah');
            return redirect()->back();
        }

        // Update password
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            Alert::success('Success', 'Password berhasil diperbarui');
            return redirect()->back();
        }
    }
}
