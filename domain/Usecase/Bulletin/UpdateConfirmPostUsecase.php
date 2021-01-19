<?php
namespace Domain\Usecase\Bulletin;
use Domain\Input\Bulletin\UpdateConfirmPostInput;
use Domain\Output\Bulletin\UpdateConfirmPostOutput;

interface UpdateConfirmPostUsecase{
    public function handle(UpdateConfirmPostInput $input):UpdateConfirmPostOutput;
}