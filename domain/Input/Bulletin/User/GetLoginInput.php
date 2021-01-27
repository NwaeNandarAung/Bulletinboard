<?php

namespace Domain\Input\Bulletin\User;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput as BaseInput;
use Domain\ValueObject\Common\ErrorCode;

Class GetLoginInput implements BaseInput
{
    public string $email;
    public string $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function validate()
    {
        if(is_null($this->email))
        throw new BulletinWebException(403,ErrorCode::ERROR_0003);

        if(is_null($this->password))
        throw new BulletinWebException(403,ErrorCode::ERROR_0003);
    }
}