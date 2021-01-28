<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput as BaseInput;
use Domain\ValueObject\Common\ErrorCode;
use Auth;

Class PostPostInput implements BaseInput
{
    public $title;
    public $description;
    public $status;
    public $createdUserId;
    public $updatedUserId;
    public $createdAt;
    public $updatedAt;

    public function __construct($title, $description,$status,$createdUserId,$updatedUserId,$createdAt,$updatedAt)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = 1;
        $this->createdUserId = Auth::user()->id;
        $this->createdAt = date('Y-m-d H:i:s');
        $this->updatedUserId = Auth::user()->id;
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function validate()
    {

    }
}