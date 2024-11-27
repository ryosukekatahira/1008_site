<?php

namespace App\Services\Usr;

use App\Repositories\Usr\LoginRepository;

class LoginService
{
    public $title;
    protected $loginRepository;

    public function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    public function index()
    {      
    }

    /**
     * ログイン機能
     *
     *
     */
    public function loginComp()
    {
    }
}