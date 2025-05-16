<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureEmailIsVerified
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->email_verified == false) {
            // Jika belum verifikasi
            return redirect()->route('verification.notice')->with('error', 'Silakan verifikasi email Anda terlebih dahulu.');
        }

        return $next($request);
    }
}

