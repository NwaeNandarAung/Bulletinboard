<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;

Class EditPostInput implements BaseInput
{
    private $postId;

    public function __construct($postId)
    {
        $this->id = $postId;
    }

    public function validate()
    {

    }
}