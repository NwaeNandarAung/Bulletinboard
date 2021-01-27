<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\UpdateUserInput;
use Domain\Output\Bulletin\User\UpdateUserOutput;

interface UpdateUserUsecase
{
    public function handle(UpdateUserInput $input):UpdateUserOutput;
}