<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\UpdateConfirmActionInput;
use Domain\Output\Bulletin\Post\UpdateConfirmActionOutput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmActionUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class UpdateConfirmActionInteractor implements UpdateConfirmActionUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(UpdateConfirmActionInput $input):UpdateConfirmActionOutput
    {
        $input->validate();

        $postInfo = $this->postRepository->getUpdatePostInfo($input, $input->id);

        $output = new UpdateConfirmActionOutput($postInfo);

        return $output;
    }
}