<?php


namespace Betsolutions\Casino\SDK\TableGames\Bura\DTO;


use Betsolutions\Casino\SDK\TableGames\Bura\Enums\BuraGameType;
use Betsolutions\Casino\SDK\TableGames\Bura\Enums\BuraTournamentType;

class GetBuraTournamentsRequest
{
    /**
     * @var BuraGameType
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
     * @var BuraTournamentType
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