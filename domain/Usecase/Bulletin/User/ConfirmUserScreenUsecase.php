<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\ConfirmUserScreenInput;
use Domain\Output\Bulletin\User\ConfirmUserScreenOutput;

interface ConfirmUserScreenUsecase
{
    public function handle(ConfirmUserScreenInput $input):ConfirmUserScreenOutput;
}