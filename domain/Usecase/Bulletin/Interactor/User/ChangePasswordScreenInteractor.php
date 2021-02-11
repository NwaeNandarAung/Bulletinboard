<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\ChangePasswordScreenInput;
use Domain\Output\Bulletin\User\ChangePasswordScreenOutput;
use Domain\Usecase\Bulletin\User\ChangePasswordScreenUsecase;

class ChangePasswordScreenInteractor implements ChangePasswordScreenUsecase
{
    public function handle(ChangePasswordScreenInput $input):ChangePasswordScreenOutput
    {
        $input->validate();

        $output = new ChangePasswordScreenOutput();

        return $output;
    }
}