<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;
use App\Exports\PostExport;
use Maatwebsite\Excel\Facades\Excel;
use Domain\Input\Bulletin\Post\CsvDownloadInput;

class CsvDownloadOutput implements BaseOutput
{
    private $postInfo;

    public function __construct($postInfo)
    {
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        $postData = $this->postInfo;

        return Excel::download(new PostExport($postData), 'post.xlsx');
    }
}