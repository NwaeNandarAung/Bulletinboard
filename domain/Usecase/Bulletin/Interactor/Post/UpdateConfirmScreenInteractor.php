<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\UpdateConfirmScreenInput;
use Domain\Output\Bulletin\Post\UpdateConfirmScreenOutput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmScreenUsecase;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Domain\Repository\Bulletin\Post\PostRepository;

class UpdateConfirmScreenInteractor implements UpdateConfirmScreenUsecase
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    
    public function handle(UpdateConfirmScreenInput $input):UpdateConfirmScreenOutput
    {
        $input->validate();
        
        $postTitleInfo = $this->postRepository->getUpdateConfirmPostInfo($input);
        
        if (!empty($postTitleInfo)) {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Post Already Existed");
        }

        $output = new UpdateConfirmScreenOutput($input);

        return $output;
    }
}