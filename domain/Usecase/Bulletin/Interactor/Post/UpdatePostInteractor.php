<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\UpdatePostInput;
use Domain\Output\Bulletin\Post\UpdatePostOutput;
use Domain\Usecase\Bulletin\Post\UpdatePostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class UpdatePostInteractor implements UpdatePostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(UpdatePostInput $input):UpdatePostOutput
    {
        //$input->validate();
        $postInfo=$this->postRepository->getUpdatePostInfo();
        $output = new UpdatePostOutput($postInfo);
        return $output;
    }
}