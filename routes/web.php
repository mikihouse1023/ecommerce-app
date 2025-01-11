<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/itemlist', [ProductController::class, 'itemlist'])->name('itemlist');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// 登録ページ表示
Route::get('/registration', [RegisterController::class, 'index'])->name('registration');

// 登録処理
Route::post('/registration', [RegisterController::class, 'register'])->name('registration');

// 確認画面表示
Route::post('/registration/confirm', [RegisterController::class, 'confirm'])->name('registration.confirm');



