<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class DeletePostOutput implements BaseOutput
{
    private $postInfo;

    public function __construct($postInfo)
    {
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        $postData = $this->postInfo;

        return redirect()->back();
    }
}