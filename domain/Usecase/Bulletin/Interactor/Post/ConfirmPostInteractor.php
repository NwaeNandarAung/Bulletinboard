<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\ConfirmPostInput;
use Domain\Output\Bulletin\Post\ConfirmPostOutput;
use Domain\Usecase\Bulletin\Post\ConfirmPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class ConfirmPostInteractor implements ConfirmPostUsecase
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(ConfirmPostInput $input):ConfirmPostOutput
    {
        $input->validate();

        $postInfo=$this->postRepository->getConfirmPostInfo($input);
        $output = new ConfirmPostOutput($postInfo);
        return $output;
    }
}