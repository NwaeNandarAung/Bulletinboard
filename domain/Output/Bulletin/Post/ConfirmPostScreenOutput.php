<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class ConfirmPostScreenOutput implements BaseOutput
{
    public function presentation()
    {
        return view('posts.createconfirm');
    }
}