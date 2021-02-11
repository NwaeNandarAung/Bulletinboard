<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\ChangePasswordScreenInput;
use Domain\Output\Bulletin\User\ChangePasswordScreenOutput;

interface ChangePasswordScreenUsecase
{
    public function handle(ChangePasswordScreenInput $input):ChangePasswordScreenOutput;
}