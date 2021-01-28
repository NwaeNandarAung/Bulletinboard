<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\PostPostInput;
use Domain\Output\Bulletin\Post\PostPostOutput;

interface PostPostUsecase
{
    public function handle(PostPostInput $input):PostPostOutput;
}