<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\EditPostInput;
use Domain\Output\Bulletin\EditPostOutput;
use Domain\Usecase\Bulletin\EditPostUsecase;
use Domain\Repository\Bulletin\EditPostRepository;

class EditPostInteractor implements EditPostUsecase
{
    private $editPostRepository;

    public function __construct(EditPostRepository $editPostRepository)
    {
        //ToDo
        $this->editPostRepository = $editPostRepository;
    }

    public function handle():EditPostOutput
    {
        //$input->validate();
        $postInfo=$this->EditPostRepository->editPostInfo();
        $output = new EditPostOutput($postInfo);
        return $output;
    }
}