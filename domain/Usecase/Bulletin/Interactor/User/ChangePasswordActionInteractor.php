<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\ChangePasswordActionInput;
use Domain\Output\Bulletin\User\ChangePasswordActionOutput;
use Domain\Usecase\Bulletin\User\ChangePasswordActionUsecase;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Domain\Repository\Bulletin\User\UserRepository;

class ChangePasswordActionInteractor implements ChangePasswordActionUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(ChangePasswordActionInput $input):ChangePasswordActionOutput
    {
        $input->validate();

        $passwordInfo = $this->userRepository->getUpdatePasswordInfo($input->newPassword);
        $output = new ChangePasswordActionOutput($passwordInfo);

        return $output;
    }
}