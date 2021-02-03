<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\UpdateConfirmPostInput;
use Domain\Output\Bulletin\Post\UpdateConfirmPostOutput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;

class UpdateConfirmPostInteractor implements UpdateConfirmPostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(UpdateConfirmPostInput $input):UpdateConfirmPostOutput
    {
        $input->validate();

        $postTitleInfo = $this->postRepository->getUpdateConfirmPostInfo($input);

        if (!empty($postTitleInfo)) {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Post Already Existed");
        }
        $output = new UpdateConfirmPostOutput($input);

        return $output;
    }
}