<?php
namespace Domain\Input\Bulletin;
use Domain\Exceptions\BulletinWebApiException;
use Domain\Input\BaseInput as BaseInput;

Class GetPostInput implements BaseInput{
    private $title;
    private $description;

    public function __construct($title, $description)
        {
            $this->title=$title;
            $this->description=$description;
        }
        public function validate(){
            if(is_null($this->title))
            throw new BulletinWebApiException("403","parameter error:title");

            if(is_null($this->description))
            throw new BulletinWebApiException("403","parameter error:description");
        }
    }
    
?>