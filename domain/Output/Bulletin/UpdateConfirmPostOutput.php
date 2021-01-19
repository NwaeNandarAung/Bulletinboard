<?php
namespace Domain\Output\Bulletin;

use Domain\Output\BaseOutput;

class UpdateConfirmPostOutput implements BaseOutput
{
    private $postInfo;
    
    public function __construct($postInfo)
    {
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        $postData = $this->postInfo;
        return view('posts.updateconfirm', compact('postData'));
    }
}
