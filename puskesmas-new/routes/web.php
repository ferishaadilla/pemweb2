<?php

use Illuminate\Support\Facades\Route;

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