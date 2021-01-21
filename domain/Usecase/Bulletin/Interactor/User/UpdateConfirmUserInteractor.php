<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Input\Bulletin\User\UpdateConfirmUserInput;
use Domain\Output\Bulletin\User\UpdateConfirmUserOutput;
use Domain\Usecase\Bulletin\User\UpdateConfirmUserUsecase;
use Domain\Repository\Bulletin\User\UpdateConfirmUserRepository;

class UpdateConfirmUserInteractor implements UpdateConfirmUserUsecase
{
    private $updateConfirmUserRepository;

    public function __construct(UpdateConfirmUserRepository $updateConfirmUserRepository)
    {
        $this->updateConfirmUserRepository = $updateConfirmUserRepository;
    }

    public function handle(UpdateConfirmUserInput $input):UpdateConfirmUserOutput
    {
        //$input->validate();
        $userInfo=$this->updateConfirmUserRepository->getUpdateConfirmUserInfo();
        $output = new UpdateConfirmUserOutput($userInfo);
        return $output;
    }
}