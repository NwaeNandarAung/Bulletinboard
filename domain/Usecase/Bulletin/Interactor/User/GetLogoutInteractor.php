<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Output\Bulletin\User\GetLogoutOutput;
use Domain\Usecase\Bulletin\User\GetLogoutUsecase;
use Domain\Repository\Bulletin\User\UserRepository;
use Auth;

class GetLogoutInteractor implements GetLogoutUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle():GetLogoutOutput
    {
        Auth::logout();
        $loginInfo=$this->userRepository->getLogoutInfo();
        $output = new GetLogoutOutput($loginInfo);

        return $output;
    }
}