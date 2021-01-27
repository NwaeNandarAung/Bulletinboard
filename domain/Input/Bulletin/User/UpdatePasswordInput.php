<?php

namespace Domain\Input\Bulletin\User;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput as BaseInput;

Class UpdatePasswordInput implements BaseInput
{
    private $password;
    private $updated_user_id;
    private $updated_at;

    public function __construct($password,$updated_user_id,$updated_at)
    {
        $this->password = $password;
        $this->updated_user_id = $updated_user_id;
        $this->updated_at = $updated_at;
    }

    public function validate()
    {
        if(is_null($this->password))
        throw new BulletinWebApiException("403","parameter error:password");
    }
}