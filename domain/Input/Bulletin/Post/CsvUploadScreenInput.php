<?php

namespace Domain\Input\Bulletin\Post;

use Domain\Input\BaseInput;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;

Class CsvUploadScreenInput implements BaseInput
{
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function validate()
    {
        // Valid File Extensions
        $valid_extension = array("csv");

        // 2MB in Bytes
        $maxFileSize = 2097152; 
        $fileSize = $this->file->getSize();
        $filename = $this->file->getClientOriginalName();
        $extension = $this->file->getClientOriginalExtension();

        if (!in_array(strtolower($extension),$valid_extension)) {
            throw new BulletinWebException(ErrorCode::ERROR_0005, "Uploaded file must be CSV type.");
        }

        if ($fileSize>$maxFileSize) {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "File size is maximum 2MB.");
        }
    }
}