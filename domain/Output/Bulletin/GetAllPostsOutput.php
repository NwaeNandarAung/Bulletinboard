<?php
namespace Domain\Output\Bulletin;

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
        return view('posts.index', compact('postData'));   
    }
}