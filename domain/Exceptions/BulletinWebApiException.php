<?php
namespace Domain\Exceptions;

use Exceptions;

class BulletinWebApiException extends Exceptions{
    public $code;
    public $logMessage;

    public function __construct(string $code,string $logMessage=null){
        $this->code=$code;
        $this->logMessage=$logMessage;
    }
}
?>