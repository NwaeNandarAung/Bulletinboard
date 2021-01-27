<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput as BaseInput;

Class GetAllPostsInput implements BaseInput
{

    public function __construct()
    {

    }
    
    public function validate()
    {
        // if(is_null($this->title))
        // throw new BulletinWebApiException("403","parameter error:title");

        // if(is_null($this->description))
        // throw new BulletinWebApiException("403","parameter error:description");
    }
}