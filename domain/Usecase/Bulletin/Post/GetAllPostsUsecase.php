<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\GetAllPostsInput;
use Domain\Output\Bulletin\Post\GetAllPostsOutput;

interface GetAllPostsUsecase
{
    public function handle(GetAllPostsInput $input):GetAllPostsOutput;
}