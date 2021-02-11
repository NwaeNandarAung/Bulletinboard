<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\ChangePasswordActionInput;
use Domain\Output\Bulletin\User\ChangePasswordActionOutput;

interface ChangePasswordActionUsecase
{
    public function handle(ChangePasswordActionInput $input):ChangePasswordActionOutput;
}