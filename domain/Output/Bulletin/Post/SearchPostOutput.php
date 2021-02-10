<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Request;

class SearchPostOutput implements BaseOutput
{
    private $postInfo;

    public function __construct($postInfo)
    {
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        $postData = $this->postInfo;

        return view('posts.list', compact('postData'));
    }
}