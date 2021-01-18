<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\GetPostInput;
use Domain\Output\Bulletin\GetPostOutput;
use Domain\Usecase\Bulletin\GetPostUsecase;
use Domain\Repository\Bulletin\PostRepository;

class GetPostInteractor implements GetPostUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        //ToDo
        $this->postRepository = $postRepository;
    }

    public function handle(GetPostInput $input):GetPostOutput
    {
        //$input->validate();
        $postInfo=$this->postRepository->getPostInfo();
        $output = new GetPostOutput($postInfo);
        return $output;
    }
}
?>