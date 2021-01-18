<?php
namespace Domain\Output\Bulletin;

use Domain\Output\BaseOutput;

class ConfirmPostOutput implements BaseOutput
{
    
    public function __construct($postInfo)
    {

    }

    public function presentation()
    {
        return view('posts.confirm');
      
    }
}