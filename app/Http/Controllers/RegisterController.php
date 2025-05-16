<?php

namespace App\Http\Controllers;

use App\Mail\VerificationEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Kita akan membuat view ini
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verification_token' => Str::random(64),
            'email_verified' => false,
            'email_verified_at' => null,
        ]);

        // Optional: Langsung login user setelah registrasi berhasil
        // Auth::login($user);

        Mail::to($user->email)->send(new VerificationEmail($user));

        Alert::success('Success', 'Registrasi berhasil! Silakan cek email Anda untuk verifikasi.');
        return redirect('/login'); // Atau redirect ke halaman lain
    }

    public function verifyEmail($token)
{
    $user = User::where('verification_token', $token)->first();

    if (!$user) {
        return redirect('/login')->with('error', 'Token tidak valid atau sudah digunakan.');
    }

    $user->email_verified = true;
    $user->verification_token = null;
    $user->email_verified_at = now();
    $user->save();

    return redirect('/login')->with('success', 'Email berhasil diverifikasi. Silakan login.');
}

}
