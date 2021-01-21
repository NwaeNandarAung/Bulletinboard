<?php
namespace Domain\Usecase\Bulletin\Interactor\User;
use Domain\Input\Bulletin\User\EditPasswordInput;
use Domain\Output\Bulletin\User\EditPasswordOutput;
use Domain\Usecase\Bulletin\User\EditPasswordUsecase;
use Domain\Repository\Bulletin\User\EditPasswordRepository;

class EditPasswordInteractor implements EditPasswordUsecase
{
    private $editPasswordRepository;

    public function __construct(EditPasswordRepository $editPasswordRepository)
    {
        $this->editPasswordRepository = $editPasswordRepository;
    }

    public function handle():EditPasswordOutput
    {
        //$input->validate();
        $passwordInfo=$this->editPasswordRepository->editPasswordInfo();
        $output = new EditPasswordOutput($passwordInfo);
        return $output;
    }
}