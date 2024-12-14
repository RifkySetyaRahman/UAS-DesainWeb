<?php

use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisteration'])->name('registrasi');
Route::post('/register', [AuthController::class, 'registrasi']);

Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

Route::resource('karyawans', KaryawanController::class);

Route::resource('departemens', DepartemenController::class);

Route::resource('posisis', PosisiController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
