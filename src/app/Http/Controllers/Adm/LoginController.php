<?php

namespace App\Http\Controllers\Usr;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Services\AuthService;

public function __construct(AuthService $authService)
{
    $this->authService = $authService;
}

class LoginController extends Controller
{
    public function index()
    {
        return view('login', ['managers_id' => ""]);
    }
}
