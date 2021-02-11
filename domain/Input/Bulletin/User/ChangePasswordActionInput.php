<?php

namespace Domain\Input\Bulletin\User;

use Domain\ValueObject\Common\ErrorCode;
use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;

Class ChangePasswordActionInput implements BaseInput
{
    public $oldPassword;
    public $newPassword;
    public $confirmPassword;

    public function __construct($oldPassword,$newPassword,$confirmPassword)
    {
        $this->oldPassword = $oldPassword;
        $this->newPassword = $newPassword;
        $this->confirmPassword = $confirmPassword;
    }

    public function validate()
    {
        if (is_null($this->oldPassword))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : oldPassword");

        if (is_null($this->newPassword))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : newPassword");

        if (is_null($this->confirmPassword))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : confirmPassword");

        if ($this->newPassword==$this->oldPassword)
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Old Password and New password must not be the same.");

        if ($this->newPassword!=$this->confirmPassword)
            throw new BulletinWebException(ErrorCode::ERROR_0002, "New password and Confirm password must be same.");
    }
}