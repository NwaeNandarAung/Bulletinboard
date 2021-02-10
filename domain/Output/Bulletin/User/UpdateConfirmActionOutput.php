<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;
use Auth;

class UpdateConfirmActionOutput implements BaseOutput
{
    public function presentation()
    {
        if (Auth::user()->type==0) {
            return redirect('users');
        } else {
            return redirect('/user/show');
        }
    }
}