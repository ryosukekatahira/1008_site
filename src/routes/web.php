<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

//管理側

//ログイン画面
Route::get('/login', [LoginController::class, 'index'])->name('login.show');
Route::POST('/login', [LoginController::class, 'login'])->name('login.submit');