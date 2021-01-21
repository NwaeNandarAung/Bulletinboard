<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Input\Bulletin\User\ConfirmUserInput;
use Domain\Output\Bulletin\User\ConfirmUserOutput;
use Domain\Usecase\Bulletin\User\ConfirmUserUsecase;
use Domain\Repository\Bulletin\User\ConfirmUserRepository;

class ConfirmUserInteractor implements ConfirmUserUsecase
{
    private $confirmUserRepository;

    public function __construct(ConfirmUserRepository $confirmUserRepository)
    {
        $this->confirmUserRepository = $confirmUserRepository;
    }

    public function handle(ConfirmUserInput $input):ConfirmUserOutput
    {
        //$input->validate();
        $userInfo=$this->confirmUserRepository->getConfirmUserInfo();
        $output = new ConfirmUserOutput($userInfo);
        return $output;
    }
}