<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Input\Bulletin\User\GetAllUsersInput;
use Domain\Output\Bulletin\User\GetAllUsersOutput;
use Domain\Usecase\Bulletin\User\GetAllUsersUsecase;
use Domain\Repository\Bulletin\User\AllUsersRepository;

class GetAllUsersInteractor implements GetAllUsersUsecase
{
    private $allUsersRepository;

    public function __construct(AllUsersRepository $allUsersRepository)
    {
        $this->allUsersRepository = $allUsersRepository;
    }

    public function handle(GetAllUsersInput $input):GetAllUsersOutput
    {
        //$input->validate();
        $usersInfo=$this->allUsersRepository->getAllUsersInfo();
        $output = new GetAllUsersOutput($usersInfo);
        return $output;
    }
}