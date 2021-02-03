<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Request;

class UpdatePostOutput implements BaseOutput
{

    private $postInfo;

    public function __construct($postInfo)
    {
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        return redirect('posts');
    }
}