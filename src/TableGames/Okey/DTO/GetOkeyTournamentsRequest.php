<?php


namespace Betsolutions\Casino\SDK\TableGames\Okey\DTO;


use Betsolutions\Casino\SDK\TableGames\Okey\Enums\OkeyGameType;
use Betsolutions\Casino\SDK\TableGames\Okey\Enums\OkeyTournamentType;

class GetOkeyTournamentsRequest
{
    /**
     * @var OkeyGameType
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
     * @var OkeyTournamentType
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