<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\GetAllPostsInput;
use Domain\Output\Bulletin\Post\GetAllPostsOutput;
use Domain\Usecase\Bulletin\Post\GetAllPostsUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class GetAllPostsInteractor implements GetAllPostsUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(GetAllPostsInput $input):GetAllPostsOutput
    {
        //$input->validate();
        $postsInfo=$this->postRepository->getAllPostsInfo();
        $output = new GetAllPostsOutput($postsInfo);
        return $output;
    }
}