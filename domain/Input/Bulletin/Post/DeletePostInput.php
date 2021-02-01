<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;
use Domain\ValueObject\Common\ErrorCode;

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