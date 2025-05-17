<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;


//Authentification
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login'])->name('login-proses');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::middleware(['verified'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/riwayat', [AdminController::class, 'riwayat'])->name('riwayat');
        Route::get('/user', [AdminController::class, 'user'])->name('user');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::post('/profile/password_update', [AdminController::class, 'passwordUpdate'])->name('profile.password_update');
    });
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});

Route::get('/verify-email/{token}', [RegisterController::class, 'verifyEmail'])->name('verify-email');

Route::get('/verify-email-notice', function () {
    return view('auth.verify-notice');
})->name('verification.notice');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.proses');

// Landing Page
Route::get('/', [UserController::class, 'home'])->name('user.home');

// Klasifikasi
Route::get('/klasifikasi', [KlasifikasiController::class, 'create'])->name('klasifikasi.create');
Route::post('/klasifikasi', [KlasifikasiController::class, 'store'])->name('klasifikasi.store');
