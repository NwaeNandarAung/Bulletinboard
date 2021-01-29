<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Output\Bulletin\Post\DeletePostOutput;
use Domain\Input\Bulletin\Post\DeletePostInput;

interface DeletePostUsecase
{
    public function handle(DeletePostInput $input):DeletePostOutput;
}