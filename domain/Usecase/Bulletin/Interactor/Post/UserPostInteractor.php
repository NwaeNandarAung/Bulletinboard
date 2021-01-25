<?php
namespace Domain\Usecase\Bulletin\Interactor\Post;
use Domain\Input\Bulletin\Post\UserPostInput;
use Domain\Output\Bulletin\Post\UserPostOutput;
use Domain\Usecase\Bulletin\Post\UserPostUsecase;
use Domain\Repository\Bulletin\Post\UserPostRepository;

class UserPostInteractor implements UserPostUsecase
{
    private $userPostRepository;

    public function __construct(UserPostRepository $userPostRepository)
    {
        $this->userPostRepository = $userPostRepository;
    }

    public function handle(UserPostInput $input):UserPostOutput
    {
        //$input->validate();
        $postInfo=$this->userPostRepository->getUserPostInfo();
        $output = new UserPostOutput($postInfo);
        return $output;
    }
}