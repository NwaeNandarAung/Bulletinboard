<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class GetAllPostsOutput implements BaseOutput
{
    private $postsInfo;

    public function __construct($postsInfo)
    {
        $this->postsInfo=$postsInfo;
    }

    public function presentation()
    {
        $postData = $this->postsInfo;
        return view('posts.list', compact('postData'));   
    }
}