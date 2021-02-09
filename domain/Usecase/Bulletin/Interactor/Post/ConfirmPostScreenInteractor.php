<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\ConfirmPostScreenInput;
use Domain\Output\Bulletin\Post\ConfirmPostScreenOutput;
use Domain\Usecase\Bulletin\Post\ConfirmPostScreenUsecase;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Domain\Repository\Bulletin\Post\PostRepository;

class ConfirmPostScreenInteractor implements ConfirmPostScreenUsecase
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(ConfirmPostScreenInput $input):ConfirmPostScreenOutput
    {
        $input->validate();

        $postTitleInfo = $this->postRepository->getPostInfoByTitle($input->title);

        if (!empty($postTitleInfo)) {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Post Already Existed");
        }

        $output = new ConfirmPostScreenOutput($input);

        return $output;
    }
}