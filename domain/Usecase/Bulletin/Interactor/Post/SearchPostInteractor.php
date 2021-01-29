<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\SearchPostInput;
use Domain\Output\Bulletin\Post\SearchPostOutput;
use Domain\Usecase\Bulletin\Post\SearchPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class SearchPostInteractor implements SearchPostUsecase
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(SearchPostInput $input):SearchPostOutput
    {
        $postInfo = $this->postRepository->searchPostInfo($input->search);
        $output = new SearchPostOutput($postInfo);

        return $output;
    }
}