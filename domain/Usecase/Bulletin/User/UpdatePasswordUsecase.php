<?php
namespace Domain\Usecase\Bulletin\User;
use Domain\Input\Bulletin\User\UpdatePasswordInput;
use Domain\Output\Bulletin\User\UpdatePasswordOutput;

interface UpdatePasswordUsecase{
    public function handle(UpdatePasswordInput $input):UpdatePasswordOutput;
}