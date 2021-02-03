<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;

Class UpdatePostInput implements BaseInput
{
    public $postId;
    public $title;
    public $description;
    public $status;

    public function __construct($postId, $title, $description,$status)
    {
        $this->id = $postId;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }

    public function validate()
    {
        if (is_null($this->title))
            throw new BulletinWebApiException("403","parameter error:title");

        if (is_null($this->description))
            throw new BulletinWebApiException("403","parameter error:description");
    }
}