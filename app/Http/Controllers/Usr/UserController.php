<?php

namespace App\Http\Controllers\Usr;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Services\AuthService;
use App\Services\Usr\UserService;
use App\Http\Controllers\Usr\BaseController;
use App\Http\Requests\Usr\UserLoginRequest;
use App\Http\Requests\Usr\UserConfirmRequest;
use App\Http\Requests\Usr\UserCompRequest;

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
            "title" => $this->userService->title,
        ]);
    }

    /**
     * ログイン完了
     *
     */
    public function loginComp(UserLoginRequest $request)
    {
        session()->keep('userData');
        $this->userService->loginComp();

        return view('usr.user.login.comp')
        ->with([
            "title" => $this->userService->title,
        ]);
    }

    /**
     * 新規登録入力画面
     *
     */
    public function create(Request $request)
    {
        if (session()->has('form_data')) { // 戻るボタンからの場合
            $params = session()->get('form_data');
        } elseif (!empty(old())) { // バリデーションエラーの場合
            $params = old();
        } else { // 通常の場合
            $params = $request->all();
        }
        
        $this->userService->create();

        return view('usr.user.create.form')
            ->with([
                "title" => $this->userService->title,
                "submitUrl" => Route('usr.user.create.conf'),
                "params" => $params
            ]);
    }

    /**
     * 新規登録確認画面
     *
     */
    public function conf(UserConfirmRequest $request)
    {
        $params = $request->validated();
        session()->flash('form_data', $params);
        $this->userService->conf();

        return view('usr.user.create.conf')
            ->with([
                "title" => $this->userService->title,
                "submitUrl" => Route('usr.user.create.comp'),
                "params" => $params
            ]);
    }

    /**
     * 新規登録完了画面
     *
     */
    public function comp(Request $request)
    {
        $formData = session()->get('form_data');
        $this->userService->comp($formData);
        return view('usr.user.create.comp');
    }
}
