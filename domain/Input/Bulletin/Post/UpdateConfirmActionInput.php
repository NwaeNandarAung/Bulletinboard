<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Input\BaseInput;

Class UpdateConfirmActionInput implements BaseInput
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

    }
}