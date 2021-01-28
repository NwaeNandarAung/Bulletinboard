<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Output\Bulletin\Post\CreatePostOutput;
use Domain\Input\Bulletin\Post\CreatePostInput;

interface CreatePostUsecase
{
    public function handle(CreatePostInput $input):CreatePostOutput;
}