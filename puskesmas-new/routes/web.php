<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return "halaman beranda";
});

Route::get('/salam', function () {
    return "P balap woii";
});

Route::get('/profile', function () {
    return "Halaman Profile";
});


// praktikum laravel 2

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// Praktikum Laravel 3
Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);
Route::get('dashboard/pasien', [PasienController::class, 'index']);