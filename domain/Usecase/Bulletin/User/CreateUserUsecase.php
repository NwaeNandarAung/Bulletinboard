<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Output\Bulletin\User\CreateUserOutput;

interface CreateUserUsecase
{
    public function handle():CreateUserOutput;
}