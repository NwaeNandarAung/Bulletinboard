<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\ShowUserInput;
use Domain\Output\Bulletin\User\ShowUserOutput;
use Domain\Usecase\Bulletin\User\ShowUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class ShowUserInteractor implements ShowUserUsecase
{
    public function handle(ShowUserInput $input):ShowUserOutput
    {
        $input->validate();
        $output = new ShowUserOutput();

        return $output;
    }
}