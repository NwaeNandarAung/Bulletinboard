<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\ConfirmPostScreenInput;
use Domain\Output\Bulletin\Post\ConfirmPostScreenOutput;

interface ConfirmPostScreenUsecase
{
    public function handle(ConfirmPostScreenInput $input):ConfirmPostScreenOutput;
}