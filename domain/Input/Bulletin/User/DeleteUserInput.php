<?php

namespace Domain\Input\Bulletin\User;

use Domain\Input\BaseInput;

Class DeleteUserInput implements BaseInput
{
    public $userId;

    public function __construct($userId)
    {
        $this->id = $userId;
    }

    public function validate()
    {

    }
}