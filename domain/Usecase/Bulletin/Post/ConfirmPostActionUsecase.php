<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\ConfirmPostActionInput;
use Domain\Output\Bulletin\Post\ConfirmPostActionOutput;

interface ConfirmPostActionUsecase
{
    public function handle(ConfirmPostActionInput $input):ConfirmPostActionOutput;
}