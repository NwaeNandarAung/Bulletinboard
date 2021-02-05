<?php

namespace Domain\Input\Bulletin\User;

use Domain\ValueObject\Common\ErrorCode;
use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;

Class ConfirmUserInput implements BaseInput
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
        if (is_null($this->name))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : name");

        if (is_null($this->email))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : email");

        if (is_null($this->password))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : password");

        if (is_null($this->confirmPassword))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : confirmPassword");

        if (is_null($this->type))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : type");

        if (is_null($this->profile))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : profile"); 

        if ($this->password!=$this->confirmPassword)
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Password and confirm password must be same");
    }
}