<?php

namespace App\Http\Controllers\Auth;

use Domain\Usecase\Bulletin\User\CreateLoginUsecase;
use Domain\Input\Bulletin\User\GetLoginInput;
use Domain\Usecase\Bulletin\User\GetLoginUsecase;
use Domain\Usecase\Bulletin\User\GetLogoutUsecase;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(CreateLoginUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();
    }

    public function login(Request $request,GetLoginUsecase $usecase)
    {
        $input = new GetLoginInput(
            $request->get('email'),
            $request->get('password'),
        );

        $output=$usecase->handle($input);
        return $output->presentation();
    }

    public function logout(GetLogoutUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();
    }
}