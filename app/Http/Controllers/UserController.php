<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Input\Bulletin\User\CreateUserInput;
use Domain\Usecase\Bulletin\User\CreateUserUsecase;
use Domain\Input\Bulletin\User\GetUserInput;
use Domain\Usecase\Bulletin\User\GetUserUsecase;
use Domain\Input\Bulletin\User\ConfirmUserInput;
use Domain\Usecase\Bulletin\User\ConfirmUserUsecase;
use Domain\Input\Bulletin\User\GetAllUsersInput;
use Domain\Usecase\Bulletin\User\GetAllUsersUsecase;
use Domain\Input\Bulletin\User\EditUserInput;
use Domain\Usecase\Bulletin\User\EditUserUsecase;
use Domain\Input\Bulletin\User\UpdateUserInput;
use Domain\Usecase\Bulletin\User\UpdateUserUsecase;
use Domain\Input\Bulletin\User\UpdateConfirmUserInput;
use Domain\Usecase\Bulletin\User\UpdateConfirmUserUsecase;
use Domain\Input\Bulletin\User\ShowUserInput;
use Domain\Usecase\Bulletin\User\ShowUserUsecase;
use Domain\Usecase\Bulletin\User\EditPasswordUsecase;
use Domain\Input\Bulletin\User\UpdatePasswordInput;
use Domain\Usecase\Bulletin\User\UpdatePasswordUsecase;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,GetAllUsersUsecase $usecase)
    {
        $input = new GetAllUsersInput(
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
            $request->get('profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
            $output = $usecase->handle($input);   
            return $output->presentation();  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateUserUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();  
    }

    public function createconfirm(Request $request, ConfirmUserUsecase $usecase)
    {
        $input = new ConfirmUserInput(
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
            $request->get('profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output = $usecase->handle($input);
        return $output->presentation();       
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,GetUserUsecase $usecase)
    {
        $input = new GetUserInput(    
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
            $request->get('profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output = $usecase->handle($input);
        return $output->presentation();          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId,ShowUserUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId,EditUserUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, UpdateUserUsecase $usecase)
    {
        $input = new UpdateUserInput(    
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
            $request->get('profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output = $usecase->handle($input);
        return $output->presentation();   
    }

    public function updateconfirm(Request $request, UpdateConfirmUserUsecase $usecase)
    {
        $input = new UpdateConfirmUserInput(
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
            $request->get('profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output = $usecase->handle($input);
        return $output->presentation();       
    }

    public function editpassword($userId,EditPasswordUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();  
    }

    public function updatepassword(Request $request, $userId, UpdatePasswordUsecase $usecase)
    {
        $input = new UpdatePasswordInput(    
            $request->get('password'),
            $request->get('updated_user_id'),
            $request->get('updated_at')
        );
        $output = $usecase->handle($input);
        return $output->presentation();   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
