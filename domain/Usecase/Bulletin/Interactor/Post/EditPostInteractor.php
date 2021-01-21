<?php
namespace Domain\Usecase\Bulletin\Interactor\Post;
use Domain\Input\Bulletin\Post\EditPostInput;
use Domain\Output\Bulletin\Post\EditPostOutput;
use Domain\Usecase\Bulletin\Post\EditPostUsecase;
use Domain\Repository\Bulletin\Post\EditPostRepository;

class EditPostInteractor implements EditPostUsecase
{
    private $editPostRepository;

    public function __construct(EditPostRepository $editPostRepository)
    {
        $this->editPostRepository = $editPostRepository;
    }

    public function handle():EditPostOutput
    {
        //$input->validate();
        $postInfo=$this->editPostRepository->editPostInfo();
        $output = new EditPostOutput($postInfo);
        return $output;
    }
}