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

    public function index(Request $request)
    {
        empty(old()) ? $params = $request->all() : $params = old(); 
        $this->loginService->index();

        return view('usr.login.form')
        ->with([
            "submitUrl" => Route('usr.login.comp'),
            "params" => $params,
        ]);
    }

    // ログイン
    public function loginComp(LoginRequest $request)
    {
        session()->keep('userData');
        $this->loginService->loginComp();

        return view('usr.login.comp');
    }
}
