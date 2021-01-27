<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Exceptions\BulletinWebException;
use Domain\Input\BaseInput as BaseInput;
use Auth;

Class ConfirmPostInput implements BaseInput
{
    public string $title;
    public string $description;
    public string $status;
    public string $created_user_id;
    public string $updated_user_id;
    public string $created_at;
    public string $updated_at;

    public function __construct($title, $description,$status,$created_user_id,$updated_user_id,$created_at,$updated_at)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->created_user_id = Auth::user()->id;
        $this->created_at = $created_at;
        $this->updated_user_id = $updated_user_id;
        $this->updated_at = $updated_at;
    }

    public function validate()
    {
        if(is_null($this->title))
        throw new BulletinWebException(403,ErrorCode::ERROR_0003);

        if(is_null($this->description))
        throw new BulletinWebException(403,ErrorCode::ERROR_0003);
    }
}