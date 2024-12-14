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
