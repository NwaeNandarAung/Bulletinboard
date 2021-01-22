<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Output\Bulletin\CreateLoginOutput;
use Domain\Usecase\Bulletin\CreateLoginUsecase;
use Domain\Repository\Bulletin\CreateLoginRepository;

class CreateLoginInteractor implements CreateLoginUsecase
{
    private $createLoginRepository;

    public function __construct(CreateLoginRepository $createLoginRepository)
    {
        $this->createLoginRepository = $createLoginRepository;
    }

    public function handle():CreateLoginOutput
    {
        //$input->validate();
        $loginInfo=$this->createLoginRepository->createLoginInfo();
        $output = new CreateLoginOutput($loginInfo);
        return $output;
    }
}