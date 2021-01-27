<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\GetPostInput;
use Domain\Output\Bulletin\Post\GetPostOutput;
use Domain\Usecase\Bulletin\Post\GetPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class GetPostInteractor implements GetPostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(GetPostInput $input):GetPostOutput
    {
        $input->validate();
        $postInfo=$this->postRepository->getPostInfo();
        $output = new GetPostOutput($postInfo);
        return $output;
    }
}