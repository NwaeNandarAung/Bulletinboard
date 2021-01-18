<?php
namespace Domain\Input\Bulletin;
use Domain\Exceptions\BulletinWebApiException;
use Domain\Input\BaseInput as BaseInput;

Class GetLoginInput implements BaseInput
{
    public string $email;
    public string $password;

    public function __construct($email, $password)
    {
        $this->email=$email;
        $this->password=$password;
    }
    public function validate()
    {
        if(is_null($this->email))
        throw new BulletinWebApiException("403","parameter error:email");

        if(is_null($this->password))
        throw new BulletinWebApiException("403","parameter error:password");
    }
}