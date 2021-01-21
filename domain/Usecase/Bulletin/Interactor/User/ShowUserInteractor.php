<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Output\Bulletin\User\ShowUserOutput;
use Domain\Usecase\Bulletin\User\ShowUserUsecase;
use Domain\Repository\Bulletin\User\ShowUserRepository;

class ShowUserInteractor implements ShowUserUsecase
{
    private $showUserRepository;

    public function __construct(showUserRepository $showUserRepository)
    {
        $this->showUserRepository = $showUserRepository;
    }

    public function handle():ShowUserOutput
    {
        //$input->validate();
        $userInfo=$this->showUserRepository->showUserInfo();
        $output = new ShowUserOutput($userInfo);
        return $output;
    }
}