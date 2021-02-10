<?php

namespace Domain\Input\Bulletin\User;

use Domain\Input\BaseInput;

Class SearchUserInput implements BaseInput
{
    public $name;
    public $email;
    public $created_from;
    public $created_to;

    public function __construct($name,$email,$created_from,$created_to)
    {
        $this->name = $name;
        $this->email = $email;
        $this->created_from = $created_from;
        $this->created_to = $created_to;
    }

    public function validate()
    {

    }
}