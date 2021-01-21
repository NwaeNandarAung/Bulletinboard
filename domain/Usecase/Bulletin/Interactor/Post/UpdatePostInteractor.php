<?php
namespace Domain\Usecase\Bulletin\Interactor\Post;
use Domain\Input\Bulletin\Post\UpdatePostInput;
use Domain\Output\Bulletin\Post\UpdatePostOutput;
use Domain\Usecase\Bulletin\Post\UpdatePostUsecase;
use Domain\Repository\Bulletin\Post\UpdatePostRepository;

class UpdatePostInteractor implements UpdatePostUsecase
{
    private $updatePostRepository;

    public function __construct(UpdatePostRepository $updatePostRepository)
    {
        $this->updatePostRepository = $updatePostRepository;
    }

    public function handle(UpdatePostInput $input):UpdatePostOutput
    {
        //$input->validate();
        $postInfo=$this->updatePostRepository->getUpdatePostInfo();
        $output = new UpdatePostOutput($postInfo);
        return $output;
    }
}