<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Output\Bulletin\Post\EditPostOutput;

interface EditPostUsecase
{
    public function handle():EditPostOutput;
}