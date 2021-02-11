<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class ChangePasswordScreenOutput implements BaseOutput
{
    public function presentation()
    {
        return view('users.changepassword');
    }
}