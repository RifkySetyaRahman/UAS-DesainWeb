<?php

use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\FrontController;
use App\Models\Departemen;
use App\Models\Karyawan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisteration'])->name('registrasi');
Route::post('/register', [AuthController::class, 'registrasi']);

Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

Route::resource('karyawan', KaryawanController::class);

