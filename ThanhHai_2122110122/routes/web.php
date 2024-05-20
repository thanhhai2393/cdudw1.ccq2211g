<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

Route::get('/', [HomeController::class,'index']);
Route::get('/sanpham', [ProductController::class,'index']);
Route::get('/chi-tiet-san-pham/{slug}', [ProductController::class,'detail']);
Route::get('/lien-he', [ContactController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
