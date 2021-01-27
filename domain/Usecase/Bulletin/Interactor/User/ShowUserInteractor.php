<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Output\Bulletin\User\ShowUserOutput;
use Domain\Usecase\Bulletin\User\ShowUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class ShowUserInteractor implements ShowUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle():ShowUserOutput
    {
        //$input->validate();
        $userInfo=$this->userRepository->showUserInfo();
        $output = new ShowUserOutput($userInfo);

        return $output;
    }
}