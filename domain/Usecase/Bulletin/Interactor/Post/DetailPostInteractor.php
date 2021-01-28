<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Output\Bulletin\Post\DetailPostOutput;
use Domain\Usecase\Bulletin\Post\DetailPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class DetailPostInteractor implements DetailPostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle():DetailPostOutput
    {
        $postInfo = $this->postRepository->detailPostInfo();
        $output = new DetailPostOutput($postInfo);

        return $output;
    }
}