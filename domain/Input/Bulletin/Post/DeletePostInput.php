<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Input\BaseInput;

Class DeletePostInput implements BaseInput
{
    public $postId;

    public function __construct($postId)
    {
        $this->id = $postId;
    }

    public function validate()
    {

    }
}