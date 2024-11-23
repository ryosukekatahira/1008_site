<?php

use Illuminate\Support\Facades\Route;
// 公開側
use App\Http\Controllers\Usr\LoginController;

// 公開側
Route::group(['prefix' => 'usr', 'as' => 'usr.'], function() {
    //ログイン画面
    Route::group(['prefix' => 'login', 'as' => 'login.'], function() {
        Route::get('', [LoginController::class, 'index'])->name('login'); // ログイン情報入力画面
        Route::get('comp', [LoginController::class, 'login'])->name('comp'); //ログイン完了画面
    });
});