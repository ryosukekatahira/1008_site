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