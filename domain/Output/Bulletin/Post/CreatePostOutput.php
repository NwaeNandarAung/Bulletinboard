<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class CreatePostOutput implements BaseOutput
{
    public function presentation()
    {
        return view('posts.create');
    }
}