<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\UpdateConfirmPostInput;
use Domain\Output\Bulletin\UpdateConfirmPostOutput;
use Domain\Usecase\Bulletin\UpdateConfirmPostUsecase;
use Domain\Repository\Bulletin\UpdateConfirmPostRepository;

class UpdateConfirmPostInteractor implements UpdateConfirmPostUsecase
{
    private $updateConfirmPostRepository;

    public function __construct(UpdateConfirmPostRepository $updateConfirmPostRepository)
    {
        //ToDo
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