<?php
namespace Domain\Output\Bulletin;

use Domain\Output\BaseOutput;

class EditPostOutput implements BaseOutput
{
    
    public function __construct($postInfo)
    {

    }

    public function presentation()
    {
        return view('posts.edit');
      
    }
}