<?php
namespace Domain\Output\Bulletin;

use Domain\Output\BaseOutput;

class GetLoginOutput implements BaseOutput
{
    private $loginInfo;
    private $postInfo;
    
    public function __construct($loginInfo,$postInfo)
    {
        $this->loginInfo=$loginInfo;
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        $loginData = $this->loginInfo;
        $postData = $this->postInfo;
        return view('posts.index', compact('loginData','postData'));  
    }
}