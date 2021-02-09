<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\ShowUserInput;
use Domain\Output\Bulletin\User\ShowUserOutput;

interface ShowUserUsecase
{
    public function handle(ShowUserInput $input):ShowUserOutput;
}