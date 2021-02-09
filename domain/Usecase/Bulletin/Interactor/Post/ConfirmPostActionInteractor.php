<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\ConfirmPostActionInput;
use Domain\Output\Bulletin\Post\ConfirmPostActionOutput;
use Domain\Usecase\Bulletin\Post\ConfirmPostActionUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class ConfirmPostActionInteractor implements ConfirmPostActionUsecase
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(ConfirmPostActionInput $input):ConfirmPostActionOutput
    {
        $postInfo = $this->postRepository->createPostInfo($input);

        $output = new ConfirmPostActionOutput($postInfo);

        return $output;
    }
}