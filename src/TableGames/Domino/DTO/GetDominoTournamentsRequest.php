<?php


namespace Betsolutions\Casino\SDK\TableGames\Domino\DTO;


use Betsolutions\Casino\SDK\TableGames\Domino\Enums\DominoGameType;
use Betsolutions\Casino\SDK\TableGames\Domino\Enums\DominoTournamentType;

class GetDominoTournamentsRequest
{
    /**
     * @var DominoGameType
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
     * @var DominoTournamentType
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