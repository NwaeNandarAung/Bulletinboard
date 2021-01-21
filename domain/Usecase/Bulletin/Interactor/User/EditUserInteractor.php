<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Input\Bulletin\User\EditUserInput;
use Domain\Output\Bulletin\User\EditUserOutput;
use Domain\Usecase\Bulletin\User\EditUserUsecase;
use Domain\Repository\Bulletin\User\EditUserRepository;

class EditUserInteractor implements EditUserUsecase
{
    private $editUserRepository;

    public function __construct(EditUserRepository $editUserRepository)
    {
        $this->editUserRepository = $editUserRepository;
    }

    public function handle():EditUserOutput
    {
        //$input->validate();
        $userInfo=$this->editUserRepository->editUserInfo();
        $output = new EditUserOutput($userInfo);
        return $output;
    }
}