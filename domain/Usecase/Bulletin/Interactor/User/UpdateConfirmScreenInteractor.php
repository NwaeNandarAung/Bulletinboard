<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\UpdateConfirmScreenInput;
use Domain\Output\Bulletin\User\UpdateConfirmScreenOutput;
use Domain\Usecase\Bulletin\User\UpdateConfirmScreenUsecase;
use Domain\Repository\Bulletin\User\UserRepository;
use Auth;

class UpdateConfirmScreenInteractor implements UpdateConfirmScreenUsecase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(UpdateConfirmScreenInput $input):UpdateConfirmScreenOutput
    {
        $input->validate();

        if($input->profile != '') {
            $imageName = time().'.'.$input->profile->extension();
            $input->profile->move(public_path(Auth::id().'/images'), $imageName);
            $output = new UpdateConfirmScreenOutput($imageName);
        } else {
            $imageName=$input->hidden_profile;
            $output = new UpdateConfirmScreenOutput($imageName);
        }

        return $output;
    }
}