<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\UpdateConfirmActionInput;
use Domain\Output\Bulletin\User\UpdateConfirmActionOutput;

interface UpdateConfirmActionUsecase
{
    public function handle(UpdateConfirmActionInput $input):UpdateConfirmActionOutput;
}