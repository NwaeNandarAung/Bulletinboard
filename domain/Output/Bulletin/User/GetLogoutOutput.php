<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class GetLogoutOutput implements BaseOutput
{
    public function __construct()
    {

    }

    public function presentation()
    {
        return view('auth.login');
    }
}