<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\GetPostInput;
use Domain\Output\Bulletin\GetPostOutput;
use Domain\Repository\Bulletin\PostRepository;

class GetPostInteractor{
    public function handle(GetPostInput $input):GetPostOutput
    {
        $postInfo=$this->PostRepository->getPostInfo();
        $input->validate();
        $input->title=$postInfo->title;
        $input->description=$postInfo->description;
        return new GetPostOutput($postInfo);
    }
}
?>