<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\GetAllPostsInput;
use Domain\Output\Bulletin\GetAllPostsOutput;
use Domain\Usecase\Bulletin\GetAllPostsUsecase;
use Domain\Repository\Bulletin\AllPostsRepository;

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