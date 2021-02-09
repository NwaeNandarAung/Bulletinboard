<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class ConfirmPostActionOutput implements BaseOutput
{
    public function presentation()
    {
        return redirect('posts');
    }
}