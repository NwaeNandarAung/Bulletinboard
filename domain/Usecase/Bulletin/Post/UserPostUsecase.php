<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\UserPostInput;
use Domain\Output\Bulletin\Post\UserPostOutput;

interface UserPostUsecase
{
    public function handle(UserPostInput $input):UserPostOutput;
}