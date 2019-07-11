<?php


namespace Betsolutions\Casino\SDK\DTO\Game;


class GetGamesResponseContainer
{
    public $statusCode;
    public $data;

    public function __construct(int $statusCode, $data = null)
    {
        $this->data = $data;
        $this->statusCode = $statusCode;
    }
}