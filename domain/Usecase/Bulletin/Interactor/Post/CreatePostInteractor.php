<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\CreatePostInput;
use Domain\Output\Bulletin\Post\CreatePostOutput;
use Domain\Usecase\Bulletin\Post\CreatePostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class CreatePostInteractor implements CreatePostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle():CreatePostOutput
    {       
        $postInfo=$this->postRepository->createPostInfo();
        $output = new CreatePostOutput($postInfo);
        return $output;
    }
}