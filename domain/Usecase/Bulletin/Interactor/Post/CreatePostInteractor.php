<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\CreatePostInput;
use Domain\Output\Bulletin\Post\CreatePostOutput;
use Domain\Usecase\Bulletin\Post\CreatePostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class CreatePostInteractor implements CreatePostUsecase
{
    public function handle(CreatePostInput $input):CreatePostOutput
    {
        $input->validate();
        $output = new CreatePostOutput();

        return $output;
    }
}