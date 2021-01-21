<?php
namespace Domain\Exceptions;

use Exception;

class BulletinWebApiException extends Exception
{
    public $code;
    public $logMessage;

    public function __construct(string $code,string $logMessage=null)
    {
        $this->code = $code;
        $this->logMessage = $logMessage;
    }
}
