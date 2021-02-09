<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\UpdateConfirmActionInput;
use Domain\Output\Bulletin\Post\UpdateConfirmActionOutput;

interface UpdateConfirmActionUsecase
{
    public function handle(UpdateConfirmActionInput $input):UpdateConfirmActionOutput;
}