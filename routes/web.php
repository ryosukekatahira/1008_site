<?php

use Illuminate\Support\Facades\Route;
// 公開側
use App\Http\Controllers\Usr\UserController;

// 公開側
Route::group(['prefix' => 'usr', 'as' => 'usr.'], function() {
    // ユーザー関連
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        //ログイン機能
        Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
            Route::get('', [UserController::class, 'loginForm'])->name(''); // ログイン情報入力画面
            Route::post('comp', [UserController::class, 'loginComp'])->name('comp'); //ログイン完了画面
        });
    });
    
});