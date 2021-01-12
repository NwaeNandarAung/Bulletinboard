<?php
namespace Domain\Output\Bulletin;
use Domain\Output\BaseInput as Output;

class GetPostOutput implements BaseOutput{
    public $postInfo;

    public function __construct($postInfo){
        $this->postInfo=$postInfo;
    }

    public function presentation()
    {
        return[
            "title"=>$postInfo->title,
            "description"=>$postInfo->description
        ];
    }
}
?>