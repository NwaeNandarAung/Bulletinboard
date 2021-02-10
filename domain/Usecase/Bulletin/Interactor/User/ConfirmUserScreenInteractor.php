<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\ConfirmUserScreenInput;
use Domain\Output\Bulletin\User\ConfirmUserScreenOutput;
use Domain\Usecase\Bulletin\User\ConfirmUserScreenUsecase;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Domain\Repository\Bulletin\User\UserRepository;
use Auth;

class ConfirmUserScreenInteractor implements ConfirmUserScreenUsecase
{
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(ConfirmUserScreenInput $input):ConfirmUserScreenOutput
    {
        $input->validate();

        $emailInfo = $this->userRepository->getUserInfoByEmail($input->email);

        if (!empty($emailInfo)) {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "User with email already exist");
        }

        $imageName = time().'.'.$input->profile->extension();
        $input->profile->move(public_path(Auth::id().'/images'), $imageName);
        $output = new ConfirmUserScreenOutput($imageName);

        return $output;
    }
}