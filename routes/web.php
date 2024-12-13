<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('karyawans', KaryawanController::class);

Route::resource('departemens', DepartemenController::class);

Route::resource('posisis', PosisiController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
