<?php


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\DTO;


class GetBackgammonTournamentsRequest
{
    /**
     * @var int
     */
    public $gameTypeId;
    /**
     * @var string
     */
    public $endDateFrom;
    /**
     * @var string
     */
    public $endDateTo;
    /**
     * @var string
     */
    public $startDateFrom;
    /**
     * @var string
     */
    public $startDateTo;
    /**
     * @var int
     */
    public $tournamentTypeId;
    /**
     * @var string
     */
    public $orderingDirection;
    /**
     * @var string
     */
    public $orderingField;
    /**
     * @var int
     */
    public $pageIndex;
    /**
     * @var int
     */
    public $pageSize;

    public function __construct(int $pageIndex, int $pageSize)
    {
        $this->pageSize = $pageSize;
        $this->pageIndex = $pageIndex;
    }
}