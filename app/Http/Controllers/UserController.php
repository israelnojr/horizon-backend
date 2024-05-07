<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\DTO\UserLoginDTO;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\DTO\UserRegistrationDTO;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

}
