<?php

namespace App\Http\Controllers\Auth;

use Domain\Usecase\Bulletin\CreateLoginUsecase;
use Domain\Input\Bulletin\GetLoginInput;
use Domain\Usecase\Bulletin\GetLoginUsecase;
use Domain\Usecase\Bulletin\GetLogoutUsecase;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  public function login(CreateLoginUsecase $usecase)
  {
    $output=$usecase->handle();
    return $output->presentation(); 
  }

  public function authenticate(Request $request,GetLoginUsecase $usecase)
  {
    $input=new GetLoginInput(
      $request->get('email'),
      $request->get('password'),
    );
    // $request->validate([
    //   'email' => 'required|string|email',
    //   'password' => 'required|string',
    // ]);
    // $credentials = $request->only('email', 'password');
    $output=$usecase->handle($input);
    return $output->presentation();   
  }

  public function logout(GetLogoutUsecase $usecase) 
  {
    Auth::logout();
    $output=$usecase->handle();
    return $output->presentation(); 
  }
}
