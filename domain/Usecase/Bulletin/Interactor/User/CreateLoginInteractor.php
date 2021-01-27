<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Output\Bulletin\User\CreateLoginOutput;
use Domain\Usecase\Bulletin\User\CreateLoginUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class CreateLoginInteractor implements CreateLoginUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle():CreateLoginOutput
    {
        //$input->validate();
        $loginInfo=$this->userRepository->createLoginInfo();
        $output = new CreateLoginOutput($loginInfo);
        return $output;
    }
}