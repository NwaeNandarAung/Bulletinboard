<?php

namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class CsvImportOutput implements BaseOutput
{
    public function presentation()
    {
        return view('posts.csv');
    }
}