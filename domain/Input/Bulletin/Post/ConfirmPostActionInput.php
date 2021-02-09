<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Input\BaseInput;

Class ConfirmPostActionInput implements BaseInput
{
    public string $title;
    public string $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function validate()
    {

    }
}