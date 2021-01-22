<?php

namespace Domain\ValueObject\Common;

class ErrorCode
{
    /**
     * System error
     */

    /** unexpected server error */
    const KD_ERROR_900_0001 = "KD-ERROR-900-0001";
    /** under maintenance */
    const KD_ERROR_900_0002 = "KD-ERROR-900-0002";

    /**
     * Common error
     */

    /** not logged in */
    const KD_ERROR_000_0001 = "KD-ERROR-000-0001";
    /** wrong request */
    const KD_ERROR_000_0002 = "KD-ERROR-000-0002";
    /** unauthorized */
    const KD_ERROR_000_0003 = "KD-ERROR-000-0003";
    /** not found */
    const KD_ERROR_000_0004 = "KD-ERROR-000-0004";
    /** wrong userId id */
    const KD_ERROR_000_0005 = "KD-ERROR-000-0005";
    /** wrong postId id */
    const KD_ERROR_000_0006 = "KD-ERROR-000-0006";


    /**
     * get status code
     *
     * @param string $code
     * @return void
     */
    public static function getStatusCode(string $code)
    {
        switch ($code) {
            case self::KD_ERROR_900_0001:
            case self::KD_ERROR_900_0002:
                return 500;

            case self::KD_ERROR_000_0001:
                return 401;
            case self::KD_ERROR_000_0002:
                return 400;
            case self::KD_ERROR_000_0003:
                return 403;
            case self::KD_ERROR_000_0004:
                return 404;
            case self::KD_ERROR_000_0005:
                return 500;
            default:
                return 500;
        }
    }
}