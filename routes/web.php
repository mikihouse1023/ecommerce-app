<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterconfirmController;
use App\Http\Controllers\RegistercompleteController;


Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// 登録ページ表示
Route::get('/registration', [RegisterController::class, 'index'])->name('registration');

// 登録処理
Route::post('/registration', [RegisterController::class, 'register'])->name('registration');

// 確認画面表示
Route::get('/registration/confirm', [RegisterconfirmController::class, 'index'])->name('registration.confirm');
Route::post('/registration/confirm', [RegisterconfirmController::class, 'confirm'])->name('registration.confirm');

Route::get('/registration/complete', [RegistercompleteController::class, 'index'])->name('registration.complete');
Route::post('/registration/complete', [RegistercompleteController::class, 'complete'])->name('registration.complete');

Route::get('/itemlist', [ProductController::class, 'itemlist'])->name('itemlist');
Route::get('/item/{id}', [ProductController::class, 'show'])->name('item.show');


Route::post('/cart', [ProductController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [ProductController::class, 'viewCart'])->name('cart.view');

//管理ユーザー関連
//管理ユーザーログイン
Route::prefix('admin')->group(function () {
Route::get('/admin_login', [LoginController::class, 'admin_index'])->name('admin.login');
Route::post('/admin_login', [LoginController::class, 'admin_login'])->name('admin.process');

Route::get('/admin', function () {
    return view('admin');
})->name('admin')->middleware('auth:admin');

});