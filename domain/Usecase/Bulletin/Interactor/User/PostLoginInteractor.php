<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\PostLoginInput;
use Domain\Output\Bulletin\User\PostLoginOutput;
use Domain\Usecase\Bulletin\User\PostLoginUsecase;
use Domain\Repository\Bulletin\User\UserRepository;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Auth;

class PostLoginInteractor implements PostLoginUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(PostLoginInput $input):PostLoginOutput
    {
        $credentials = ["email" => $input->email, "password" => $input->password];
        
        if (Auth::attempt($credentials)) {
            $loginInfo = $this->userRepository->getLoginInfo($input);

            return new PostLoginOutput($loginInfo);
        }

        throw new BulletinWebException(ErrorCode::ERROR_0003, "Email Address or Password is invalid");
    }
}