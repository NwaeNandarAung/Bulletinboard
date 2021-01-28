<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Domain\Input\BaseInput;

Class ConfirmPostInput implements BaseInput
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
        $length = strlen($this->title);  

        if (is_null($this->title) || $length > 255)
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : title");

        if (is_null($this->description))
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Invalid Paramenter : description");
    }
}