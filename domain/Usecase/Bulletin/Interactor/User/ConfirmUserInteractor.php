<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\ConfirmUserInput;
use Domain\Output\Bulletin\User\ConfirmUserOutput;
use Domain\Usecase\Bulletin\User\ConfirmUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;

class ConfirmUserInteractor implements ConfirmUserUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(ConfirmUserInput $input):ConfirmUserOutput
    {
        $input->validate();
        $emailInfo = $this->userRepository->getUserInfoByEmail($input->email);

        if (!empty($emailInfo)) {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "User with email already exist");
        }

        $userInfo = $this->userRepository->createUserInfo($input);
        $output = new ConfirmUserOutput($userInfo);

        return $output;
    }
}