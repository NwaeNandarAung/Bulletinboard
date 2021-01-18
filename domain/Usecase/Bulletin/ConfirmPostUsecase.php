<?php
namespace Domain\Usecase\Bulletin;
use Domain\Input\Bulletin\ConfirmPostInput;
use Domain\Output\Bulletin\ConfirmPostOutput;

interface ConfirmPostUsecase{
    public function handle(ConfirmPostInput $input):ConfirmPostOutput;
}