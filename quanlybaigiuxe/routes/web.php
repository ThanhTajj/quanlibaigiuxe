<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhachhangController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/khachhang', KhachhangController::class);