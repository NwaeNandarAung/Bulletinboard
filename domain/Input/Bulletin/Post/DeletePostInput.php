<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;
use Domain\ValueObject\Common\ErrorCode;

Class DeletePostInput implements BaseInput
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function validate()
    {

    }
}