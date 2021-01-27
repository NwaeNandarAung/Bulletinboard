<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Output\Bulletin\User\CreateLoginOutput;
use Domain\Usecase\Bulletin\User\CreateLoginUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class CreateLoginInteractor implements CreateLoginUsecase
{
    public function __construct()
    {

    }

    public function handle():CreateLoginOutput
    {
        $output = new CreateLoginOutput();

        return $output;
    }
}