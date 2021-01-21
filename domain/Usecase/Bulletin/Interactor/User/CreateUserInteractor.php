<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Output\Bulletin\User\CreateUserOutput;
use Domain\Usecase\Bulletin\User\CreateUserUsecase;
use Domain\Repository\Bulletin\User\CreateUserRepository;

class CreateUserInteractor implements CreateUserUsecase
{
    private $createUserRepository;

    public function __construct(CreateUserRepository $createUserRepository)
    {
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