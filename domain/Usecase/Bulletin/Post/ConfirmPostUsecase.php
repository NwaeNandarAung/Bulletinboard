<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\ConfirmPostInput;
use Domain\Output\Bulletin\Post\ConfirmPostOutput;

interface ConfirmPostUsecase{
    public function handle(ConfirmPostInput $input):ConfirmPostOutput;
}