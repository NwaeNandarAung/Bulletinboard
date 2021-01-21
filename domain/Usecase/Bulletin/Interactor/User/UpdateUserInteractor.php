<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Input\Bulletin\User\UpdateUserInput;
use Domain\Output\Bulletin\User\UpdateUserOutput;
use Domain\Usecase\Bulletin\User\UpdateUserUsecase;
use Domain\Repository\Bulletin\User\UpdateUserRepository;

class UpdateUserInteractor implements UpdateUserUsecase
{
    private $updateUserRepository;

    public function __construct(UpdateUserRepository $updateUserRepository)
    {
        $this->updateUserRepository = $updateUserRepository;
    }

    public function handle(UpdateUserInput $input):UpdateUserOutput
    {
        //$input->validate();
        $userInfo=$this->updateUserRepository->getUpdateuserInfo();
        $output = new UpdateUserOutput($userInfo);
        return $output;
    }
}