<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('administrator.dashboard');
});

Route::get('/riyawat', function () {
    return view('administrator.riwayat');
});

Route::get('/user', function () {
    return view('administrator.user');
});

// Auth
Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

// User
Route::get('/user/home', [UserController::class, 'home'])->name('user.home');

Route::get('/user/klasifikasi', [UserController::class, 'klasifikasi'])->name('user.klasifikasi');