<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\ConfirmPostInput;
use Domain\Output\Bulletin\Post\ConfirmPostOutput;
use Domain\Usecase\Bulletin\Post\ConfirmPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class ConfirmPostInteractor implements ConfirmPostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(ConfirmPostInput $input):ConfirmPostOutput
    {
        $input->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',
        ]);
        
        $postInfo=$this->postRepository->getConfirmPostInfo();
        $output = new ConfirmPostOutput($postInfo);
        return $output;
    }
}