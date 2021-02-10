<?php

namespace Domain\Input\Bulletin\User;

use Domain\Input\BaseInput;

Class UpdateConfirmActionInput implements BaseInput
{
    public $name;
    public $profile;
    public $type;
    public $phone;
    public $address;
    public $dob;

    public function __construct($name,$profile,$type,$phone,$address,$dob)
    {
        $this->name = $name;
        $this->profile = $profile;
        $this->type = $type;
        $this->phone = $phone;
        $this->address = $address;
        $this->dob = $dob;
    }

    public function validate()
    {

    }
}