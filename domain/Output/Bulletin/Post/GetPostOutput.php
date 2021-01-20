<?php
namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class GetPostOutput implements BaseOutput
{
    private $postInfo;
    
    public function __construct($postInfo)
    {
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        $postData = $this->postInfo;
        return view('posts.index', compact('postData'));
      
    }
}
