<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\EditUserInput;
use Domain\Output\Bulletin\User\EditUserOutput;
use Domain\Usecase\Bulletin\User\EditUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class EditUserInteractor implements EditUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle():EditUserOutput
    {
        //$input->validate();
        $userInfo=$this->userRepository->editUserInfo();
        $output = new EditUserOutput($userInfo);
        return $output;
    }
}