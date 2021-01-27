<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\UpdatePasswordInput;
use Domain\Output\Bulletin\User\UpdatePasswordOutput;
use Domain\Usecase\Bulletin\User\UpdatePasswordUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class UpdatePasswordInteractor implements UpdatePasswordUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(UpdatePasswordInput $input):UpdatePasswordOutput
    {
        //$input->validate();
        $passwordInfo=$this->userRepository->getUpdatePasswordInfo();
        $output = new UpdatePasswordOutput($passwordInfo);
        return $output;
    }
}