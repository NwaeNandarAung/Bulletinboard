<?php
namespace Domain\Usecase\Bulletin;
use Domain\Input\Bulletin\GetPostInput;
use Domain\Output\Bulletin\GetPostOutput;

interface GetPostUsecase{
    public function handle(GetPostInput $input):GetPostOutput;
}
    
?>