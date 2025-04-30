<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

Route::get('/riyawat', function () {
    return view('administrator.riwayat');
});

Route::get('/user', function () {
    return view('administrator.user');
});

//Authentification
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.proses');


// User
Route::get('/', [UserController::class, 'home'])->name('user.home');

Route::get('/klasifikasi', [UserController::class, 'klasifikasi'])->name('user.klasifikasi');