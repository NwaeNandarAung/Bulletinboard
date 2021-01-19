<?php
namespace Domain\Usecase\Bulletin;
use Domain\Input\Bulletin\UpdatePostInput;
use Domain\Output\Bulletin\UpdatePostOutput;

interface UpdatePostUsecase{
    public function handle(UpdatePostInput $input):UpdatePostOutput;
}