<?php
namespace Domain\Usecase\Bulletin\User;
use Domain\Output\Bulletin\User\EditUserOutput;

interface EditUserUsecase{
    public function handle():EditUserOutput;
}