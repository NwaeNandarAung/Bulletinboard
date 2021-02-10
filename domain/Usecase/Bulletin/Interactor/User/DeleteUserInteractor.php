<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\DeleteUserInput;
use Domain\Output\Bulletin\User\DeleteUserOutput;
use Domain\Usecase\Bulletin\User\DeleteUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class DeleteUserInteractor implements DeleteUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(DeleteUserInput $input):DeleteUserOutput
    {
        $input->validate();

        $userInfo = $this->userRepository->deleteUserInfo($input->id);
        $output = new DeleteUserOutput($userInfo);

        return $output;
    }
}