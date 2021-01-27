<?php

namespace Domain\ValueObject\Common;

class ErrorCode
{
    const ERROR_0002 = "ERROR-0002";
    /** unauthorized */
    const ERROR_0003 = "ERROR-0003";

    /**
     * get status code
     *
     * @param string $code
     * @return void
     */
    public static function getStatusCode(string $code)
    {
        switch ($code) {
            case self::ERROR_0002:
                return 402;
            case self::ERROR_0003:
                return 403;
            default:
                return 500;
        }
    }
}