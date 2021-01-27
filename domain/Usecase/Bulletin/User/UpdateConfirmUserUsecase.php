<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\UpdateConfirmUserInput;
use Domain\Output\Bulletin\User\UpdateConfirmUserOutput;

interface UpdateConfirmUserUsecase
{
    public function handle(UpdateConfirmUserInput $input):UpdateConfirmUserOutput;
}