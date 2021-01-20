<?php
namespace Domain\Usecase\Bulletin\Interactor\Post;
use Domain\Input\Bulletin\Post\CreatePostInput;
use Domain\Output\Bulletin\Post\CreatePostOutput;
use Domain\Usecase\Bulletin\Post\CreatePostUsecase;
use Domain\Repository\Bulletin\Post\CreatePostRepository;

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