<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\ConfirmUserInput;
use Domain\Output\Bulletin\User\ConfirmUserOutput;

interface ConfirmUserUsecase
{
    public function handle(ConfirmUserInput $input):ConfirmUserOutput;
}