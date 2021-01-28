<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            
        });

        $this->renderable(function (BulletinWebException $e, $request)
        {
            $errorCode = $e->code;
            $errorMessage=$e->logMessage;
            return response()->view('error', compact('e'), ErrorCode::getStatusCode($errorCode));
        });
    }
}