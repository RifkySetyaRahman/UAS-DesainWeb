<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'beranda'])->name('front.beranda');

// Route untuk halaman registrasi
Route::get('/register', function () {
    return view('register'); // Pastikan view 'register' ada di folder resources/views
})->name('register');

// Route untuk menyimpan data registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Route untuk halaman login
Route::get('/login', function () {
    return view('login'); // Pastikan view 'login' ada di folder resources/views
})->name('login');

// Route untuk memproses login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');




Route::resource('karyawan', KaryawanController::class);


