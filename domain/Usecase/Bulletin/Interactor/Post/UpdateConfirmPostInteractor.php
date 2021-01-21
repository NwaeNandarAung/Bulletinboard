<?php
namespace Domain\Usecase\Bulletin\Interactor\Post;
use Domain\Input\Bulletin\Post\UpdateConfirmPostInput;
use Domain\Output\Bulletin\Post\UpdateConfirmPostOutput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmPostUsecase;
use Domain\Repository\Bulletin\Post\UpdateConfirmPostRepository;

class UpdateConfirmPostInteractor implements UpdateConfirmPostUsecase
{
    private $updateConfirmPostRepository;

    public function __construct(UpdateConfirmPostRepository $updateConfirmPostRepository)
    {
        $this->updateConfirmPostRepository = $updateConfirmPostRepository;
    }

    public function handle(UpdateConfirmPostInput $input):UpdateConfirmPostOutput
    {
        //$input->validate();
        $postInfo=$this->updateConfirmPostRepository->getUpdateConfirmPostInfo();
        $output = new UpdateConfirmPostOutput($postInfo);
        return $output;
    }
}