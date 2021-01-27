<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput as BaseInput;
use Domain\ValueObject\Common\ErrorCode;

Class CreatePostInput implements BaseInput
{
    public function __construct()
    {
 
    }
    
    public function validate()
    {
        // if(is_null($this->title))
        // throw new BulletinWebException(ErrorCode::ERROR_0003,"Title is required");

        // if(is_null($this->description))
        // throw new BulletinWebException(ErrorCode::ERROR_0003,"Description is required");
    }
}