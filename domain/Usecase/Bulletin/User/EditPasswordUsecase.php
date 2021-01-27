<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Output\Bulletin\User\EditPasswordOutput;

interface EditPasswordUsecase
{
    public function handle():EditPasswordOutput;
}