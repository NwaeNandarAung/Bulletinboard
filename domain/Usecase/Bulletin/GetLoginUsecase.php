<?php
namespace Domain\Usecase\Bulletin;
use Domain\Input\Bulletin\GetLoginInput;
use Domain\Output\Bulletin\GetLoginOutput;

interface GetLoginUsecase{
    public function handle(GetLoginInput $input):GetLoginOutput;
}
    
