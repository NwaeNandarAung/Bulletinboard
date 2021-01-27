<?php

namespace Domain\Input\Bulletin\User;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput as BaseInput;

Class GetAllUsersInput implements BaseInput
{
    private $name;
    private $email;
    private $password;
    private $profile;
    private $type;
    private $phone;
    private $address;
    private $dob;
    private $created_user_id;
    private $updated_user_id;
    private $created_at;
    private $updated_at;

    public function __construct($name,$email,$password,$profile,$type,$phone,$address,$dob,$created_user_id,$updated_user_id,$created_at,$updated_at)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->profile = $profile;
        $this->type = $type;
        $this->phone = $phone;
        $this->address = $address;
        $this->dob = $dob;
        $this->created_user_id = $created_user_id;
        $this->created_at = $created_at;
        $this->updated_user_id = $updated_user_id;
        $this->updated_at = $updated_at;
    }
    
    public function validate()
    {
        if(is_null($this->name))
        throw new BulletinWebApiException("403","parameter error:name");

        if(is_null($this->email))
        throw new BulletinWebApiException("403","parameter error:email");
    }
}