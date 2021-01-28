<?php

namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class PostLoginOutput implements BaseOutput
{
    private $loginInfo;

    public function __construct($loginInfo)
    {
        $this->loginInfo=$loginInfo;
    }

    public function presentation()
    {
        $loginData = $this->loginInfo;

        return redirect('posts')->with($loginData);
    }
}