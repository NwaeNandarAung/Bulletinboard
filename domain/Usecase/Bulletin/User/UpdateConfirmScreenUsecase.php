<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\UpdateConfirmScreenInput;
use Domain\Output\Bulletin\User\UpdateConfirmScreenOutput;

interface UpdateConfirmScreenUsecase
{
    public function handle(UpdateConfirmScreenInput $input):UpdateConfirmScreenOutput;
}