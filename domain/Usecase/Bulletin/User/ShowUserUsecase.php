<?php
namespace Domain\Usecase\Bulletin\User;
use Domain\Output\Bulletin\User\ShowUserOutput;

interface ShowUserUsecase{
    public function handle():ShowUserOutput;
}