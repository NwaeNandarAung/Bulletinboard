<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\UpdateUserInput;
use Domain\Output\Bulletin\User\UpdateUserOutput;
use Domain\Usecase\Bulletin\User\UpdateUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class UpdateUserInteractor implements UpdateUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(UpdateUserInput $input):UpdateUserOutput
    {
        //$input->validate();
        $userInfo=$this->userRepository->getUpdateuserInfo();
        $output = new UpdateUserOutput($userInfo);

        return $output;
    }
}