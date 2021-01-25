<?php
namespace Domain\Output\Bulletin;

use Domain\Output\BaseOutput;
use Auth;

class GetLoginOutput implements BaseOutput
{
    private $loginInfo;
    
    public function __construct($loginInfo)
    {
        $this->loginInfo=$loginInfo;
    }

    public function presentation()
    {
        $loginData = $this->loginInfo;
        if(Auth::user()->type=='1')
        {
        return redirect('posts')->with($loginData);
        }
        return redirect('posts/userpost')->with($loginData);
    }
}