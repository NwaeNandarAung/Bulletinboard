<?php
namespace Domain\Usecase\Bulletin\Post;
use Domain\Input\Bulletin\Post\UpdatePostInput;
use Domain\Output\Bulletin\Post\UpdatePostOutput;

interface UpdatePostUsecase{
    public function handle(UpdatePostInput $input):UpdatePostOutput;
}