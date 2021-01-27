<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\UpdateConfirmPostInput;
use Domain\Output\Bulletin\Post\UpdateConfirmPostOutput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class UpdateConfirmPostInteractor implements UpdateConfirmPostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(UpdateConfirmPostInput $input):UpdateConfirmPostOutput
    {
        //$input->validate();
        $postInfo=$this->postRepository->getUpdateConfirmPostInfo();
        $output = new UpdateConfirmPostOutput($postInfo);

        return $output;
    }
}