<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\ConfirmPostInput;
use Domain\Output\Bulletin\ConfirmPostOutput;
use Domain\Usecase\Bulletin\ConfirmPostUsecase;
use Domain\Repository\Bulletin\ConfirmPostRepository;

class ConfirmPostInteractor implements ConfirmPostUsecase
{
    private $confirmPostRepository;

    public function __construct(ConfirmPostRepository $confirmPostRepository)
    {
        //ToDo
        $this->confirmPostRepository = $confirmPostRepository;
    }

    public function handle(ConfirmPostInput $input):ConfirmPostOutput
    {
        //$input->validate();
        $confirmPostInfo=$this->confirmPostRepository->getConfirmPostInfo();
        $output = new ConfirmPostInput($confirmPostInfo);
        return $output;
    }
}