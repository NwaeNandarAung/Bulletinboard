<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\GetLoginInput;
use Domain\Output\Bulletin\GetLoginOutput;
use Domain\Usecase\Bulletin\GetLoginUsecase;
use Domain\Repository\Bulletin\LoginRepository;
use Domain\Exceptions\BulletinWebApiException;
use Hash;

class GetLoginInteractor implements GetLoginUsecase
{
    private $loginRepository;

    public function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;       
    }

    public function handle(GetLoginInput $input):GetLoginOutput
    {
        $loginInfo = $this->loginRepository->getLoginInfo($input);
        if($loginInfo==null)
        {
            throw new BulletinWebApiException(500,'Not login');
        }
        if(Hash::check($input->password,$loginInfo[0]->password))
        {
            $output = new GetLoginOutput($loginInfo);
            return $output;
        }
           
    }
}