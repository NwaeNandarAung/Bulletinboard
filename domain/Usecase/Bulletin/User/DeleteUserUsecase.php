<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Output\Bulletin\User\DeleteUserOutput;
use Domain\Input\Bulletin\User\DeleteUserInput;

interface DeleteUserUsecase
{
    public function handle(DeleteUserInput $input):DeleteUserOutput;
}