<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class UpdateConfirmActionOutput implements BaseOutput
{
    public function presentation()
    {
        return redirect('posts');
    }
}