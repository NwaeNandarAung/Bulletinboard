<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\SearchPostInput;
use Domain\Output\Bulletin\Post\SearchPostOutput;

interface SearchPostUsecase
{
    public function handle(SearchPostInput $input):SearchPostOutput;
}