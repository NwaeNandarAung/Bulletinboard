<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Input\BaseInput;

Class PostPostInput implements BaseInput
{
    public $title;
    public $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function validate()
    {

    }
}