<?php

namespace App\Http\Controllers\Usr;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Services\AuthService;
use App\Http\Controllers\Usr\BaseController;

class LoginController extends BaseController
{
    // ログイン情報入力画面
    public function index()
    {
        return view('usr.login.form');
    }

    // ログイン
    public function login(Request $request)
    {
        return view('usr.login.comp');
    }
}
