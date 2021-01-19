<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Output\Bulletin\CreateUserOutput;
use Domain\Usecase\Bulletin\CreateUserUsecase;
use Domain\Repository\Bulletin\CreateUserRepository;

class CreateUserInteractor implements CreateUserUsecase
{
    private $createUserRepository;

    public function __construct(CreateUserRepository $createUserRepository)
    {
        //ToDo
        $this->createUserRepository = $createUserRepository;
    }

    public function handle():CreateUserOutput
    {
        //$input->validate();
        $userInfo=$this->createUserRepository->createUserInfo();
        $output = new CreateUserOutput($userInfo);
        return $output;
    }
}