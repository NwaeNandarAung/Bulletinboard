<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\GetAllUsersInput;
use Domain\Output\Bulletin\User\GetAllUsersOutput;
use Domain\Usecase\Bulletin\User\GetAllUsersUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class GetAllUsersInteractor implements GetAllUsersUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(GetAllUsersInput $input):GetAllUsersOutput
    {
        $input->validate();
        $usersInfo = $this->userRepository->getAllUsersInfo();
        $output = new GetAllUsersOutput($usersInfo);

        return $output;
    }
}