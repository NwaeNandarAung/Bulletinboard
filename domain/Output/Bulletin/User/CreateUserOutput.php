<?php
namespace Domain\Output\Bulletin\User;

use Domain\Output\BaseOutput;

class CreateUserOutput implements BaseOutput
{
    
    public function __construct($userInfo)
    {

    }

    public function presentation()
    {
        return view('users.create');
      
    }
}
