<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\DeletePostInput;
use Domain\Output\Bulletin\Post\DeletePostOutput;
use Domain\Usecase\Bulletin\Post\DeletePostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class DeletePostInteractor implements DeletePostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(DeletePostInput $input):DeletePostOutput
    {
        $input->validate();
        $postInfo = $this->postRepository->deletePostInfo();
        $output = new DeletePostOutput($postInfo);

        return $output;
    }
}