<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\PostPostInput;
use Domain\Output\Bulletin\Post\PostPostOutput;
use Domain\Usecase\Bulletin\Post\PostPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class PostPostInteractor implements PostPostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(PostPostInput $input):PostPostOutput
    {
        $input->validate();

        $postInfo = $this->postRepository->createPostInfo($input);
        $output = new PostPostOutput();

        return $output;
    }
}