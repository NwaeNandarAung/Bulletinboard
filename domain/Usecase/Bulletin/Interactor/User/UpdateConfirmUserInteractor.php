<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\UpdateConfirmUserInput;
use Domain\Output\Bulletin\User\UpdateConfirmUserOutput;
use Domain\Usecase\Bulletin\User\UpdateConfirmUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class UpdateConfirmUserInteractor implements UpdateConfirmUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(UpdateConfirmUserInput $input):UpdateConfirmUserOutput
    {
        $input->validate();
        $userInfo = $this->userRepository->getUpdateConfirmUserInfo();
        $output = new UpdateConfirmUserOutput($userInfo);

        return $output;
    }
}