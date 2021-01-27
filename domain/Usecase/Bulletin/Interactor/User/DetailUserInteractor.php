<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Output\Bulletin\User\DetailUserOutput;
use Domain\Usecase\Bulletin\User\DetailUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class DetailUserInteractor implements DetailUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle():DetailUserOutput
    {
        //$input->validate();
        $userInfo=$this->userRepository->detailUserInfo();
        $output = new DetailUserOutput($userInfo);
        return $output;
    }
}