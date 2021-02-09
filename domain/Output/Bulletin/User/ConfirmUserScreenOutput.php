<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class ConfirmUserScreenOutput implements BaseOutput
{
    private $imageName;

    public function __construct($imageName)
    {
        $this->imageName=$imageName;
    }

    public function presentation()
    {
        $imageName = $this->imageName;

        return view('users.createconfirm', compact('imageName'));
    }
}