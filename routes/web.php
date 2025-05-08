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
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/riwayat', [AdminController::class, 'index'])->name('riwayat');
    Route::get('/user', [AdminController::class, 'index'])->name('user');
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/klasifikasi', [UserController::class, 'index']);
});
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.proses');

// User
Route::get('/', [UserController::class, 'home'])->name('user.home');

// Klasifikasi
Route::get('/klasifikasi', [KlasifikasiController::class, 'create'])->name('klasifikasi.create');
Route::post('/klasifikasi', [KlasifikasiController::class, 'store'])->name('klasifikasi.store');