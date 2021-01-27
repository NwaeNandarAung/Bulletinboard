<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Output\Bulletin\Post\DetailPostOutput;

interface DetailPostUsecase{
    public function handle():DetailPostOutput;
}