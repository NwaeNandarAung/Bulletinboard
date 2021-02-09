<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class CsvUploadActionOutput implements BaseOutput
{
    public function presentation()
    {
        return view('posts.csv');
    }
}