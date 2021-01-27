<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput as BaseInput;
use Auth;

Class ConfirmPostInput implements BaseInput
{
    public string $title;
    public string $description;
    public string $createdUserId;

    public function __construct($title, $description, $createdUserId)
    {
        $this->title = $title;
        $this->description = $description;
        $this->createdUserId = $createdUserId;
    }

    public function validate()
    {
        if(is_null($this->title))
        throw new BulletinWebException(403,ErrorCode::ERROR_0003);

        if(is_null($this->description))
        throw new BulletinWebException(403,ErrorCode::ERROR_0003);
    }
}