<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Output\Bulletin\User\GetLogoutOutput;

interface GetLogoutUsecase{
    public function handle():GetLogoutOutput;
}