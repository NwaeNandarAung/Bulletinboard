<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\EditPasswordInput;
use Domain\Output\Bulletin\User\EditPasswordOutput;
use Domain\Usecase\Bulletin\User\EditPasswordUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class EditPasswordInteractor implements EditPasswordUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle():EditPasswordOutput
    {
        //$input->validate();
        $passwordInfo=$this->userRepository->editPasswordInfo();
        $output = new EditPasswordOutput($passwordInfo);
        return $output;
    }
}