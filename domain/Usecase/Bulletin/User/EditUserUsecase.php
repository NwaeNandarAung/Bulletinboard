<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\EditUserInput;
use Domain\Output\Bulletin\User\EditUserOutput;

interface EditUserUsecase
{
    public function handle(EditUserInput $input):EditUserOutput;
}