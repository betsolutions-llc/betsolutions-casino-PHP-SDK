<?php


namespace Betsolutions\Casino\SDK\TableGames\Seka\DTO;


use Betsolutions\Casino\SDK\TableGames\Seka\Enums\SekaGameType;
use Betsolutions\Casino\SDK\TableGames\Seka\Enums\SekaTournamentType;

class GetSekaTournamentsRequest
{
    /**
     * @var SekaGameType
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
     * @var SekaTournamentType
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