<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Input\Bulletin\User\GetAllUsersInput;
use Domain\Usecase\Bulletin\User\GetAllUsersUsecase;
use Domain\Input\Bulletin\User\CreateUserInput;
use Domain\Usecase\Bulletin\User\CreateUserUsecase;
use Domain\Input\Bulletin\User\ConfirmUserScreenInput;
use Domain\Usecase\Bulletin\User\ConfirmUserScreenUsecase;
use Domain\Input\Bulletin\User\ConfirmUserActionInput;
use Domain\Usecase\Bulletin\User\ConfirmUserActionUsecase;
use Domain\Input\Bulletin\User\SearchUserInput;
use Domain\Usecase\Bulletin\User\SearchUserUsecase;
use Domain\Input\Bulletin\User\DeleteUserInput;
use Domain\Usecase\Bulletin\User\DeleteUserUsecase;
use Domain\Input\Bulletin\User\ShowUserInput;
use Domain\Usecase\Bulletin\User\ShowUserUsecase;
use Domain\Input\Bulletin\User\EditUserInput;
use Domain\Usecase\Bulletin\User\EditUserUsecase;
use Domain\Input\Bulletin\User\UpdateConfirmScreenInput;
use Domain\Usecase\Bulletin\User\UpdateConfirmScreenUsecase;
use Domain\Input\Bulletin\User\UpdateConfirmActionInput;
use Domain\Usecase\Bulletin\User\UpdateConfirmActionUsecase;
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
        $input = new GetAllUsersInput();
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
        $input = new CreateUserInput();
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function createConfirm(Request $request, ConfirmUserScreenUsecase $usecase)
    {
        $input = new ConfirmUserScreenInput(
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
            $request->get('confirmPassword'),
            $request->file('profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function store(Request $request, ConfirmUserActionUsecase $usecase)
    {
        $input = new ConfirmUserActionInput(
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
            $request->get('confirmPassword'),
            $request->get('profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function search(Request $request, SearchUserUsecase $usecase)
    {
        $input = new SearchUserInput(
            $request->get('name'),
            $request->get('email'),
            $request->get('created_from'),
            $request->get('created_to')
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
    public function destroy(Request $request,$userId, DeleteUserUsecase $usecase)
    {
        $input = new DeleteUserInput($userId);
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
        $input = new ShowUserInput();
        $output = $usecase->handle($input);

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
        $input = new EditUserInput();
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function updateconfirm(Request $request, UpdateConfirmScreenUsecase $usecase)
    {

        $input = new UpdateConfirmScreenInput(
            $request->get('name'),
            $request->get('email'),
            $request->file('profile'),
            $request->get('hidden_profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob'),
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, UpdateConfirmActionUsecase $usecase)
    {
        $input = new UpdateConfirmActionInput(
            $request->get('name'),
            $request->get('profile'),
            $request->get('type'),
            $request->get('phone'),
            $request->get('address'),
            $request->get('dob'),
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
}