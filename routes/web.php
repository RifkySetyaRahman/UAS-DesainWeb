<?php

use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 // Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'login']);

// Register
Route::get('/register', [AuthController::class, 'showRegisteration'])->name('registrasi');
Route::post('/register', [AuthController::class, 'registrasi']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');
