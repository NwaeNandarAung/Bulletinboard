<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class EditPasswordOutput implements BaseOutput
{
    private $passwordInfo;

    public function __construct($passwordInfo)
    {
        $this->passwordInfo=$passwordInfo;
    }

    public function presentation()
    {
        $passwordData = $this->passwordInfo;
        return view('users.editpassword', compact('passwordData'));
    }
}