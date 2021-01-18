<?php
namespace Domain\Input\Bulletin;
use Domain\Exceptions\BulletinWebApiException;
use Domain\Input\BaseInput as BaseInput;

Class ConfirmPostInput implements BaseInput
{
    private $title;
    private $description;
    private $created_user_id;
    private $created_at;

    public function __construct($title, $description,$created_user_id,$created_at)
    {
        $this->title=$title;
        $this->description=$description;
        $this->created_user_id=$created_user_id;
        $this->created_at=$created_at;
    }
    public function validate()
    {
        
    }
}