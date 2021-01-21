<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Input\Bulletin\User\UpdatePasswordInput;
use Domain\Output\Bulletin\User\UpdatePasswordOutput;
use Domain\Usecase\Bulletin\User\UpdatePasswordUsecase;
use Domain\Repository\Bulletin\User\UpdatePasswordRepository;

class UpdatePasswordInteractor implements UpdatePasswordUsecase
{
    private $updatePasswordRepository;

    public function __construct(UpdatePasswordRepository $updatePasswordRepository)
    {
        $this->updatePasswordRepository = $updatePasswordRepository;
    }

    public function handle(UpdatePasswordInput $input):UpdatePasswordOutput
    {
        //$input->validate();
        $passwordInfo=$this->updatePasswordRepository->getUpdatePasswordInfo();
        $output = new UpdatePasswordOutput($passwordInfo);
        return $output;
    }
}