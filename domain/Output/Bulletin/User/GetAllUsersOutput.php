<?php
namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class GetAllUsersOutput implements BaseOutput
{
    private $usersInfo;
    public function __construct($usersInfo)
    {
        $this->usersInfo=$usersInfo;
    }

    public function presentation()
    {
        $userData = $this->usersInfo;
        return view('users.list', compact('userData'));   
    }
}