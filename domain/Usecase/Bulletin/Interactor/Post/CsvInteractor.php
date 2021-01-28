<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Output\Bulletin\Post\CsvOutput;
use Domain\Usecase\Bulletin\Post\CsvUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class CsvInteractor implements CsvUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle():CsvOutput
    {
        $csvInfo = $this->postRepository->csvInfo();
        $output = new CsvOutput($csvInfo);

        return $output;
    }
}