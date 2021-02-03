<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\EditPostInput;
use Domain\Output\Bulletin\Post\EditPostOutput;
use Domain\Usecase\Bulletin\Post\EditPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class EditPostInteractor implements EditPostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(EditPostInput $input):EditPostOutput
    {
        $input->validate();

        $postInfo = $this->postRepository->editPostInfo($input->id);
        $output = new EditPostOutput($postInfo);

        return $output;
    }
}