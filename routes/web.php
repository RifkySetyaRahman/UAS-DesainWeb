<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProgrammerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;

// Route untuk halaman beranda
Route::get('/', function () {
    return view('beranda.index'); // Pastikan view 'beranda' ada di folder resources/views
});

Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk programmer
Route::get('/programmers', [ProgrammerController::class, 'index'])->name('programmers.index');

// Rute untuk registrasi
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
// Route::get('/karyawan', [KaryawanController::class, 'create'])->name('karyawan.create');


// Rute untuk sign in
Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('signin');
Route::post('/signin', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk halaman home yang dilindungi
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

  // Rute untuk logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

