<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class UpdatePostOutput implements BaseOutput
{
    private $postInfo;
    
    public function __construct($postInfo)
    {
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        $postData = $this->postInfo;
        return view('posts.list', compact('postData'));
    }
}