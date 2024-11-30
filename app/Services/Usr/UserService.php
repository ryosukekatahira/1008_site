<?php

namespace App\Services\Usr;

use App\Repositories\Usr\UserRepository;

class UserService
{
    public $title;
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function loginForm()
    {      
        $this->title = "ログイン";
    }

    /**
     * ログイン機能
     *
     *
     */
    public function loginComp()
    {
        $this->title = "ログインが完了しました";
    }

    /**
     * 新規登録入力画面
     *
     */
    public function create()
    {
        $this->title = "新規会員登録";
    }

    /**
     * 新規登録確認画面
     *
     */
    public function conf()
    {
        $this->title = "登録内容確認";
    }
}
