<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\CreateUserInput;
use Domain\Output\Bulletin\User\CreateUserOutput;
use Domain\Usecase\Bulletin\User\CreateUserUsecase;

class CreateUserInteractor implements CreateUserUsecase
{
    public function handle(CreateUserInput $input):CreateUserOutput
    {
        $input->validate();
        $output = new CreateUserOutput();

        return $output;
    }
}