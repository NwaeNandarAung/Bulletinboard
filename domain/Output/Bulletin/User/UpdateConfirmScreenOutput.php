<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class UpdateConfirmScreenOutput implements BaseOutput
{
    private $imageName;

    public function __construct($imageName)
    {
        $this->imageName=$imageName;
    }

    public function presentation()
    {
        $imageName = $this->imageName;

        return view('users.editconfirm', compact('imageName'));
    }
}