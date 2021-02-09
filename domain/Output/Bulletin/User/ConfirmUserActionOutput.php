<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class ConfirmUserActionOutput implements BaseOutput
{
    public function presentation()
    {
        return redirect('users');
    }
}