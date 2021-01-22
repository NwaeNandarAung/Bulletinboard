<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Output\Bulletin\GetLogoutOutput;
use Domain\Usecase\Bulletin\GetLogoutUsecase;
use Domain\Repository\Bulletin\GetLogoutRepository;

class GetLogoutInteractor implements GetLogoutUsecase
{
    private $getLogoutRepository;

    public function __construct(GetLogoutRepository $getLogoutRepository)
    {
        $this->getLogoutRepository = $getLogoutRepository;
    }

    public function handle():GetLogoutOutput
    {
        //$input->validate();
        $loginInfo=$this->getLogoutRepository->getLogoutInfo();
        $output = new GetLogoutOutput($loginInfo);
        return $output;
    }
}