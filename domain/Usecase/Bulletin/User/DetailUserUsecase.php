<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Output\Bulletin\User\DetailUserOutput;

interface DetailUserUsecase
{
    public function handle():DetailUserOutput;
}