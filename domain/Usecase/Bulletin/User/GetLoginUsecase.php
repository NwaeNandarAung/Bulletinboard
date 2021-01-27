<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\GetLoginInput;
use Domain\Output\Bulletin\User\GetLoginOutput;

interface GetLoginUsecase{
    public function handle(GetLoginInput $input):GetLoginOutput;
}
