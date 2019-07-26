<?php


namespace Betsolutions\Casino\SDK\Exceptions;


use Exception;

class CantConnectToServerException extends Exception
{
    private $httpStatusCode;

    public function __construct(int $httpStatusCode, string $message = null)
    {
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
    }

    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }
}