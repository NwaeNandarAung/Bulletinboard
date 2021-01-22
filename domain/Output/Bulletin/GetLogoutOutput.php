<?php
namespace Domain\Output\Bulletin;

use Domain\Output\BaseOutput;

class GetLogoutOutput implements BaseOutput
{
    public function __construct()
    {

    }

    public function presentation()
    {
        return view('auth.login');
    }
}