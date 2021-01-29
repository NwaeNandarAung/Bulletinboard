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
        $currentPage = Paginator::resolveCurrentPage();
        $col = collect($postData);
        $perPage = 10;
        $currentPageItems = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $postData = new Paginator($currentPageItems, count($col), $perPage);
        $postData->setPath(Request::url());
        $postData->appends(Request::all());

        return view('posts.list', compact('postData'));
    }
}