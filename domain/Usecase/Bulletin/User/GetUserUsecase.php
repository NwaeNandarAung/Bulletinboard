<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\GetUserInput;
use Domain\Output\Bulletin\User\GetUserOutput;

interface GetUserUsecase
{
    public function handle(GetUserInput $input):GetUserOutput;
}