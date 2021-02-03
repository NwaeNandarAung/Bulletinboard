<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput;

Class UpdateConfirmPostInput implements BaseInput
{
    public $id;
    public $title;
    public $description;
    public $status;

    public function __construct($id,$title, $description,$status)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
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