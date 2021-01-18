<?php
namespace Domain\Usecase\Bulletin;
use Domain\Input\Bulletin\GetAllPostsInput;
use Domain\Output\Bulletin\GetAllPostsOutput;

interface GetAllPostsUsecase{
    public function handle(GetAllPostsInput $input):GetAllPostsOutput;
}