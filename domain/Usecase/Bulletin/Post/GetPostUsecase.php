<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\GetPostInput;
use Domain\Output\Bulletin\Post\GetPostOutput;

interface GetPostUsecase
{
    public function handle(GetPostInput $input):GetPostOutput;
}