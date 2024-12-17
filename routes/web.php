<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman beranda
Route::get('/beranda', function () {
    return view('beranda'); // Pastikan view 'beranda' ada di folder resources/views
})->name('beranda')->middleware('auth');

// Route untuk halaman registrasi
Route::get('/register', function () {
    return view('register'); // Pastikan view 'register' ada di folder resources/views
})->name('register');

// Route untuk menyimpan data registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Route untuk halaman login
Route::get('/login', function () {
    return view('beranda'); // Pastikan view 'login' ada di folder resources/views
})->name('login')->middleware('guest');

// Route untuk memproses login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

  // Rute untuk logout
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk root agar mengarah ke halaman registrasi
Route::get('/', function () {
    return redirect()->route('register'); // Redirect ke halaman registrasi

});

