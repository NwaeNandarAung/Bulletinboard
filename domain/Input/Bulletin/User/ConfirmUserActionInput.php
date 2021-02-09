<?php

namespace Domain\Input\Bulletin\User;

use Domain\ValueObject\Common\ErrorCode;
use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;

Class ConfirmUserActionInput implements BaseInput
{
    public $name;
    public $email;
    public $password;
    public $profile;
    public $type;
    public $phone;
    public $address;
    public $dob;

    public function __construct($name,$email,$password,$confirmPassword,$profile,$type,$phone,$address,$dob)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
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