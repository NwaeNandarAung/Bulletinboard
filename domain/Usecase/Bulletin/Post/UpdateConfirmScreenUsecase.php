<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\UpdateConfirmScreenInput;
use Domain\Output\Bulletin\Post\UpdateConfirmScreenOutput;

interface UpdateConfirmScreenUsecase
{
    public function handle(UpdateConfirmScreenInput $input):UpdateConfirmScreenOutput;
}