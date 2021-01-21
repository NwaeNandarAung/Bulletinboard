<?php

namespace App\Http\Controllers\Auth;

use Domain\Input\Bulletin\GetLoginInput;
use Domain\Usecase\Bulletin\GetLoginUsecase;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    public function login()
    {
      return view('auth.login');
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

    public function logout() 
    {
      Auth::logout();
      return redirect('login');
    }
}
