<?php
namespace Domain\Usecase\Bulletin\Interactor\Post;
use Domain\Input\Bulletin\Post\GetAllPostsInput;
use Domain\Output\Bulletin\Post\GetAllPostsOutput;
use Domain\Usecase\Bulletin\Post\GetAllPostsUsecase;
use Domain\Repository\Bulletin\Post\AllPostsRepository;

class GetAllPostsInteractor implements GetAllPostsUsecase
{
    private $allPostsRepository;

    public function __construct(AllPostsRepository $allPostsRepository)
    {
        //ToDo
        $this->allPostsRepository = $allPostsRepository;
    }

    public function handle(GetAllPostsInput $input):GetAllPostsOutput
    {
        //$input->validate();
        $postsInfo=$this->allPostsRepository->getAllPostsInfo();
        $output = new GetAllPostsOutput($postsInfo);
        return $output;
    }
}