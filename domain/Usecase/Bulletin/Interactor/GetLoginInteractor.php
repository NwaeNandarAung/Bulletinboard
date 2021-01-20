<?php
namespace Domain\Usecase\Bulletin\Interactor;
use Domain\Input\Bulletin\GetLoginInput;
use Domain\Output\Bulletin\GetLoginOutput;
use Domain\Usecase\Bulletin\GetLoginUsecase;
use Domain\Repository\Bulletin\LoginRepository;
use Domain\Input\Bulletin\Post\GetAllPostsUsecase;
use Domain\Input\Bulletin\Post\GetAllPostsInput;
use Domain\Repository\Bulletin\Post\AllPostsRepository;
use Domain\Exceptions\BulletinWebApiException;
use Hash;

class GetLoginInteractor implements GetLoginUsecase
{
    private $loginRepository;

    public function __construct(LoginRepository $loginRepository, allPostsRepository $allPostsRepository)
    {
        $this->loginRepository = $loginRepository;     
        $this->allPostsRepository = $allPostsRepository;  
    }

    public function handle(GetLoginInput $input):GetLoginOutput
    {
        $loginInfo = $this->loginRepository->getLoginInfo($input);
        $postInfo = $this->allPostsRepository->getAllPostsInfo($input);
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

    public function handle1(GetAllPostsInput $input):GetAllPostsOutput
    {
        $postInfo=$this->allPostsRepository->getAllPostsInfo();
        $output = new GetAllPostsOutput($postInfo);
        return $output;
    }
}