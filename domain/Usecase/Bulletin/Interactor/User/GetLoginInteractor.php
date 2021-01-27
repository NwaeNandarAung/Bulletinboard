<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\GetLoginInput;
use Domain\Output\Bulletin\User\GetLoginOutput;
use Domain\Usecase\Bulletin\User\GetLoginUsecase;
use Domain\Repository\Bulletin\User\UserRepository;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Auth;

class GetLoginInteractor implements GetLoginUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(GetLoginInput $input):GetLoginOutput
    {
        $credentials = ["email" => $input->email, "password" => $input->password];
        
        if (Auth::attempt($credentials)) {
            $loginInfo = $this->userRepository->getLoginInfo($input);

            return new GetLoginOutput($loginInfo);
        }

        throw new BulletinWebException(ErrorCode::ERROR_0003, "Email Address or Password is invalid");
    }
}