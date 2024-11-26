<?php

namespace App\Http\Controllers\Usr;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Services\AuthService;
use App\Services\Usr\LoginService;
use App\Http\Controllers\Usr\BaseController;
use App\Http\Requests\Usr\LoginRequest;

class LoginController extends BaseController
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    /**
     * ログイン情報入力画面
     *
     */

    public function index()
    {
        $this->loginService->index();
        return view('usr.login.form')
        ->with([
            "title" => $this->loginService->title,
            "submitUrl" => Route('usr.login.comp'),
        ]);
    }

    // ログイン
    public function loginComp(LoginRequest $request)
    {
        // バリデーションチェック
        // 入力されたメールアドレスとPWが一致するアカウントがあるかを検索
        $this->loginService->loginComp($request->validate());
        //　アカウントがあった場合、アカウントIDなどを取得
        // なかった場合は、エラーを表示
        
        return view('usr.login.comp');
    }
}
