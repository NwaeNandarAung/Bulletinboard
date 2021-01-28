<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class DetailUserOutput implements BaseOutput
{
    private $usersInfo;

    public function __construct($usersInfo)
    {
        $this->usersInfo=$usersInfo;
    }

    public function presentation()
    {
        $userData = $this->usersInfo;

        return view('users.detail', compact('userData'));
    }
}