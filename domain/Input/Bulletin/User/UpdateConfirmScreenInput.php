<?php

namespace Domain\Input\Bulletin\User;

use Domain\ValueObject\Common\ErrorCode;
use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;

Class UpdateConfirmScreenInput implements BaseInput
{
    public $name;
    public $email;
    public $profile;
    public $hidden_profile;
    public $type;
    public $phone;
    public $address;
    public $dob;

    public function __construct($name,$email,$profile,$hidden_profile,$type,$phone,$address,$dob)
    {
        $this->name = $name;
        $this->email = $email;
        $this->profile = $profile;
        $this->hidden_profile = $hidden_profile;
        $this->type = $type;
        $this->phone = $phone;
        $this->address = $address;
        $this->dob = $dob;
    }

    public function validate()
    {
        if (is_null($this->name))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : name");

        if (is_null($this->email))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : email");

        if (is_null($this->type))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : type");
    }
}