<?php
namespace Domain\Usecase\Bulletin;
use Domain\Output\Bulletin\CreateUserOutput;

interface CreateUserUsecase{
    public function handle():CreateUserOutput;
}