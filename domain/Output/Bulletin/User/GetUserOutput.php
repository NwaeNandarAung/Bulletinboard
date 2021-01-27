<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class GetUserOutput implements BaseOutput
{
    private $userInfo;
    public function __construct($userInfo)
    {
        $this->userInfo=$userInfo;
    }

    public function presentation()
    {
        $userData = $this->userInfo;
        return view('users.list', compact('userData'));
    }
}