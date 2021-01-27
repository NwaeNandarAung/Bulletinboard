<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class UpdatePasswordOutput implements BaseOutput
{
    private $passwordInfo;

    public function __construct($passwordInfo)
    {
        $this->passwordInfo=$passwordInfo;
    }

    public function presentation()
    {
        return redirect('users');
    }
}