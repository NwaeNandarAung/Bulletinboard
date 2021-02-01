<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\EditPostInput;
use Domain\Output\Bulletin\Post\EditPostOutput;

interface EditPostUsecase
{
    public function handle(EditPostInput $input):EditPostOutput;
}