<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\GetUserInput;
use Domain\Output\Bulletin\User\GetUserOutput;
use Domain\Usecase\Bulletin\User\GetUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class GetUserInteractor implements GetUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(GetUserInput $input):GetUserOutput
    {
        //$input->validate();
        $userInfo=$this->userRepository->getUserInfo();
        $output = new GetUserOutput($userInfo);
        return $output;
    }
}