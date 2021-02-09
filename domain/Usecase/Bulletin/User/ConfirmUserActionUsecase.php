<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\ConfirmUserActionInput;
use Domain\Output\Bulletin\User\ConfirmUserActionOutput;

interface ConfirmUserActionUsecase
{
    public function handle(ConfirmUserActionInput $input):ConfirmUserActionOutput;
}