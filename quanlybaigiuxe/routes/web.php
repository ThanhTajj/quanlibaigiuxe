<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhachhangController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [KhachhangController::class, 'index']);

Route::resource('/khachhang', KhachhangController::class);