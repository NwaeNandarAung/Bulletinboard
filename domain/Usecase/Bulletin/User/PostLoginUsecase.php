<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\PostLoginInput;
use Domain\Output\Bulletin\User\PostLoginOutput;

interface PostLoginUsecase
{
    public function handle(PostLoginInput $input):PostLoginOutput;
}