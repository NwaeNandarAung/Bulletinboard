<?php
namespace Domain\Usecase\Bulletin\Interactor\Post;
use Domain\Input\Bulletin\Post\ConfirmPostInput;
use Domain\Output\Bulletin\Post\ConfirmPostOutput;
use Domain\Usecase\Bulletin\Post\ConfirmPostUsecase;
use Domain\Repository\Bulletin\Post\ConfirmPostRepository;

class ConfirmPostInteractor implements ConfirmPostUsecase
{
    private $confirmPostRepository;

    public function __construct(ConfirmPostRepository $confirmPostRepository)
    {
        $this->confirmPostRepository = $confirmPostRepository;
    }

    public function handle(ConfirmPostInput $input):ConfirmPostOutput
    {
        //$input->validate();
        $postInfo=$this->confirmPostRepository->getConfirmPostInfo();
        $output = new ConfirmPostOutput($postInfo);
        return $output;
    }
}