<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Output\Bulletin\User\CreateLoginOutput;

interface CreateLoginUsecase{
    public function handle():CreateLoginOutput;
}