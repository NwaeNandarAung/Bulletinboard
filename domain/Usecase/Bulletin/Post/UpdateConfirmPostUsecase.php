<?php
namespace Domain\Usecase\Bulletin\Post;
use Domain\Input\Bulletin\Post\UpdateConfirmPostInput;
use Domain\Output\Bulletin\Post\UpdateConfirmPostOutput;

interface UpdateConfirmPostUsecase{
    public function handle(UpdateConfirmPostInput $input):UpdateConfirmPostOutput;
}