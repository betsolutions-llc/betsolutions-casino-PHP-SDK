<?php


namespace Betsolutions\Casino\SDK\Exceptions;


use Exception;

class CantConnectToServerException extends Exception
{
    private $curlErrorNumber;
    private $curlErrorString;

    public function __construct(int $curlErrorNumber, string $curlErrorString)
    {
        parent::__construct($curlErrorString);
        $this->curlErrorNumber = $curlErrorNumber;
        $this->curlErrorString = $curlErrorString;
    }

    public function getCurlErrorString(): string
    {
        return $this->curlErrorString;
    }

    public function getCurlErrorNumber(): int
    {
        return $this->curlErrorNumber;
    }
}