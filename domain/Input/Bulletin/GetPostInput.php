<?php
namespace Domain\Input\Post;
use Domain\Exceptions\BulletinWebApiException;
use Domain\Input\BaseInput as BaseInput;

Class GetPostInput implements BaseInput{
    public $title;
    public $description;

    public function __construct(
        $title,
        $description
        )
        {
            $this->title=$title;
            $this->description=$description;
        }
        public function validate(){
            if(is_null($this->title))
            throw new BulletinWebApiException(ErrorCode::Bulletion_ERR_000_0002,"parameter error:title");

            if(is_null($this->description))
            throw new BulletinWebApiException(ErrorCode::Bulletion_ERR_000_0002,"parameter error:description");
        }
    }
    
?>