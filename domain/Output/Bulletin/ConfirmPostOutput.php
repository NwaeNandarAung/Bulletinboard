<?php
namespace Domain\Output\Bulletin;

use Domain\Output\BaseOutput;

class ConfirmPostOutput implements BaseOutput
{

    public function __construct()
    {
   
    }

    public function presentation()
    {
        dd('test');
     
        return view('posts.confirm');
      
    }
}