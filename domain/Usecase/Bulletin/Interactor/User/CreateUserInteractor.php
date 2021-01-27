<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Output\Bulletin\User\CreateUserOutput;
use Domain\Usecase\Bulletin\User\CreateUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class CreateUserInteractor implements CreateUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle():CreateUserOutput
    {
        //$input->validate();
        $userInfo=$this->userRepository->createUserInfo();
        $output = new CreateUserOutput($userInfo);

        return $output;
    }
}