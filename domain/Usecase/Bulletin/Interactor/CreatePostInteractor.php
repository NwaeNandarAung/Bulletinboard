<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\CreatePostInput;
use Domain\Output\Bulletin\CreatePostOutput;
use Domain\Usecase\Bulletin\CreatePostUsecase;
use Domain\Repository\Bulletin\CreatePostRepository;

class CreatePostInteractor implements CreatePostUsecase
{
    private $createPostRepository;

    public function __construct(CreatePostRepository $createPostRepository)
    {
        //ToDo
        $this->createPostRepository = $createPostRepository;
    }

    public function handle():CreatePostOutput
    {
        //$input->validate();
        $postInfo=$this->createPostRepository->createPostInfo();
        $output = new CreatePostOutput($postInfo);
        return $output;
    }
}