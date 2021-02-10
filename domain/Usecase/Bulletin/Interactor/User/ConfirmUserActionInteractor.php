<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\ConfirmUserActionInput;
use Domain\Output\Bulletin\User\ConfirmUserActionOutput;
use Domain\Usecase\Bulletin\User\ConfirmUserActionUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class ConfirmUserActionInteractor implements ConfirmUserActionUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(ConfirmUserActionInput $input):ConfirmUserActionOutput
    {
        $input->validate();

        $userInfo = $this->userRepository->createUserInfo($input);
        $output = new ConfirmUserActionOutput($userInfo);

        return $output;
    }
}