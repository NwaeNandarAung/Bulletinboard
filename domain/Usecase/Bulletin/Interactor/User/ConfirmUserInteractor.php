<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\ConfirmUserInput;
use Domain\Output\Bulletin\User\ConfirmUserOutput;
use Domain\Usecase\Bulletin\User\ConfirmUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class ConfirmUserInteractor implements ConfirmUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(ConfirmUserInput $input):ConfirmUserOutput
    {
        $input->validate();
        $userInfo = $this->userRepository->getConfirmUserInfo();
        $output = new ConfirmUserOutput($userInfo);

        return $output;
    }
}