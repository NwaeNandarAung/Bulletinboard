<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\UpdateConfirmScreenInput;
use Domain\Output\Bulletin\User\UpdateConfirmScreenOutput;
use Domain\Usecase\Bulletin\User\UpdateConfirmScreenUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

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

        $imageName = time().'.'.$input->profile->extension();  
   
        $input->profile->move(public_path('images'), $imageName);

        $output = new UpdateConfirmScreenOutput($imageName);

        return $output;
    }
}