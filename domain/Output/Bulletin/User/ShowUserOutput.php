<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class ShowUserOutput implements BaseOutput
{
    public function presentation()
    {
        return view('users.profile');
    }
}