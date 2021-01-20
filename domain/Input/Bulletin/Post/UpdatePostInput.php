<?php
namespace Domain\Input\Bulletin\Post;
use Domain\Exceptions\BulletinWebApiException;
use Domain\Input\BaseInput as BaseInput;

Class UpdatePostInput implements BaseInput
{
    private $title;
    private $description;
    private $status;
    private $created_user_id;
    private $updated_user_id;
    private $created_at;
    private $updated_at;

    public function __construct($title, $description,$status,$created_user_id,$updated_user_id,$created_at,$updated_at)
    {
        $this->title=$title;
        $this->description=$description;
        $this->status=$status;
        $this->created_user_id=$created_user_id;
        $this->created_at=$created_at;
        $this->updated_user_id=$updated_user_id;
        $this->updated_at=$updated_at;
    }
    public function validate()
    {
        if(is_null($this->title))
        throw new BulletinWebApiException("403","parameter error:title");

        if(is_null($this->description))
        throw new BulletinWebApiException("403","parameter error:description");
    }
}