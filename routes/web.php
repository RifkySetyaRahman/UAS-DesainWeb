<?php

use app\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 route::get('/registrasi', [AuthController::class, 'showRegistration'])->name('registrasi');
