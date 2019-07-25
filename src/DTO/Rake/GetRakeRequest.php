<?php


namespace Betsolutions\Casino\SDK\DTO\Rake;


class GetRakeRequest
{
    /**
     * @var string
     */
    public $fromDate;
    /**
     * @var string
     */
    public $toDate;
    /**
     * @var int
     */
    public $gameId;
    /**
     * @var string
     */
    public $userId;

    public function __construct(
        string $fromDate = null,
        string $toDate = null,
        string $gameId = null,
        string $userId = null
    )
    {
        $this->toDate = $toDate;
        $this->fromDate = $fromDate;
        $this->gameId = $gameId;
        $this->userId = $userId;
    }
}