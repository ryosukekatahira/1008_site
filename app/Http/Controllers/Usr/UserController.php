<?php

namespace App\Http\Controllers\Usr;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Services\AuthService;
use App\Services\Usr\UserService;
use App\Http\Controllers\Usr\BaseController;
use App\Http\Requests\Usr\UserRequest;

class UserController extends BaseController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * ログイン情報入力画面
     *
     */

    public function loginForm(Request $request)
    {
        empty(old()) ? $params = $request->all() : $params = old(); 
        $this->userService->loginForm();

        return view('usr.user.login.form')
        ->with([
            "submitUrl" => Route('usr.user.login.comp'),
            "params" => $params,
        ]);
    }

    // ログイン
    public function loginComp(UserRequest $request)
    {
        session()->keep('userData');
        $this->userService->loginComp();

        return view('usr.user.login.comp');
    }
}
