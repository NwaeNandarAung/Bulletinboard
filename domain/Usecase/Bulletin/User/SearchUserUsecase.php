<?php

namespace Domain\Usecase\Bulletin\User;

use Domain\Input\Bulletin\User\SearchUserInput;
use Domain\Output\Bulletin\User\SearchUserOutput;

interface SearchUserUsecase
{
    public function handle(SearchUserInput $input):SearchUserOutput;
}