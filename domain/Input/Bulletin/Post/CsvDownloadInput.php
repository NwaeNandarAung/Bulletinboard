<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Input\BaseInput;

Class CsvDownloadInput implements BaseInput
{
    public $search;

    public function __construct($search)
    {
        $this->search = $search;
    }

    public function validate()
    {

    }
}