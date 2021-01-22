<?php
namespace Domain\Output\Bulletin\Post;

use Domain\Output\BaseOutput;

class CsvOutput implements BaseOutput
{
    private $csvInfo;
    
    public function __construct($csvInfo)
    {
        $this->csvInfo=$csvInfo;
    }

    public function presentation()
    {
        $csvData = $this->csvInfo;
        return view('posts.csv', compact('csvData'));
    }
}
