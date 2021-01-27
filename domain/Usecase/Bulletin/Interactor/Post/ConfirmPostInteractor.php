<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\ConfirmPostInput;
use Domain\Output\Bulletin\Post\ConfirmPostOutput;
use Domain\Usecase\Bulletin\Post\ConfirmPostUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;

class ConfirmPostInteractor implements ConfirmPostUsecase
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(ConfirmPostInput $input):ConfirmPostOutput
    {
        $length = strlen ($input->title);  
        if ( $length > 255) {  
            throw new BulletinWebException(ErrorCode::ERROR_0002, "The title cannot be longer than 255 words.");
        }

        $postInfo=$this->postRepository->getConfirmPostInfo($input);
        $output = new ConfirmPostOutput($postInfo);

        return $output;
    }
}