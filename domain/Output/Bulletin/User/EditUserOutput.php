<?php
namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class EditUserOutput implements BaseOutput
{
    public function __construct()
    {

    }

    public function presentation()
    {
        return view('users.edit');
    }
}