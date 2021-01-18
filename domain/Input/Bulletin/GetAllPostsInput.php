<?php
namespace Domain\Input\Bulletin;
use Domain\Exceptions\BulletinWebApiException;
use Domain\Input\BaseInput as BaseInput;

Class GetAllPostsInput implements BaseInput
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
        if(is_null($this->title))
        throw new BulletinWebApiException("403","parameter error:title");

        if(is_null($this->description))
        throw new BulletinWebApiException("403","parameter error:description");
    }
}