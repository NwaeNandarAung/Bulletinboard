<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\UpdatePostInput;
use Domain\Output\Bulletin\UpdatePostOutput;
use Domain\Usecase\Bulletin\UpdatePostUsecase;
use Domain\Repository\Bulletin\UpdatePostRepository;

class UpdatePostInteractor implements UpdatePostUsecase
{
    private $updatePostRepository;

    public function __construct(UpdatePostRepository $updatePostRepository)
    {
        //ToDo
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