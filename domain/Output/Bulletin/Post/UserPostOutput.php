<?php
namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class UserPostOutput implements BaseOutput
{
    private $postsInfo;
    public function __construct($postsInfo)
    {
        $this->postsInfo=$postsInfo;
    }

    public function presentation()
    {
        $postData = $this->postsInfo;
        return view('posts.userpost', compact('postData'));   
    }
}