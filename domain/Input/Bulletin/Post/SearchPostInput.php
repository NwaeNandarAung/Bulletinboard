<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;
use Domain\ValueObject\Common\ErrorCode;

Class SearchPostInput implements BaseInput
{
    public $search;

    public function __construct($search)
    {
        $this->search = $search;
    }
    
    public function validate()
    {
        if (is_null($this->search))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : search");
    }
}