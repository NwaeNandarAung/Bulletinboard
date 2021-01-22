<?php
namespace Domain\Usecase\Bulletin;
use Domain\Output\Bulletin\CreateLoginOutput;

interface CreateLoginUsecase{
    public function handle():CreateLoginOutput;
}