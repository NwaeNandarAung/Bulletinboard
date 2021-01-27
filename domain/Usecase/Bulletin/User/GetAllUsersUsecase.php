<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\GetAllUsersInput;
use Domain\Output\Bulletin\User\GetAllUsersOutput;

interface GetAllUsersUsecase
{
    public function handle(GetAllUsersInput $input):GetAllUsersOutput;
}