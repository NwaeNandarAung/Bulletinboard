<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\UpdateConfirmActionInput;
use Domain\Output\Bulletin\User\UpdateConfirmActionOutput;
use Domain\Usecase\Bulletin\User\UpdateConfirmActionUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class UpdateConfirmActionInteractor implements UpdateConfirmActionUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(UpdateConfirmActionInput $input):UpdateConfirmActionOutput
    {
        $input->validate();

        $userInfo = $this->userRepository->getUpdateUserInfo($input);
        $output = new UpdateConfirmActionOutput($userInfo);

        return $output;
    }
}