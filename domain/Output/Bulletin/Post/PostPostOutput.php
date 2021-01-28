<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class PostPostOutput implements BaseOutput
{
    public function __construct()
    {

    }

    public function presentation()
    {
        return redirect('posts');
    }
}