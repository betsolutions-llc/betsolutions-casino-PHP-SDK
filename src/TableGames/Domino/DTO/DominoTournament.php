<?php


namespace Betsolutions\Casino\SDK\TableGames\Domino\DTO;


class DominoTournament
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $betAmount;
    /**
     * @var int
     */
    public $prize;
    /**
     * @var int
     */
    public $maxPlayerCount;
    /**
     * @var int
     */
    public $minPlayerCount;
    /**
     * @var int
     */
    public $registeredPlayerCount;
    /**
     * @var \Betsolutions\Casino\SDK\TableGames\Domino\Enums\DominoTournamentType
     */
    public $tournamentTypeId;
    /**
     * @var \Betsolutions\Casino\SDK\TableGames\Domino\Enums\DominoTournamentStatus
     */
    public $statusId;
    /**
     * @var \Betsolutions\Casino\SDK\TableGames\Domino\Enums\DominoGameType
     */
    public $gameTypeId;
    /**
     * @var string
     */
    public $createDate;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var bool
     */
    public $isHidden;
    /**
     * @var DominoTournamentTranslation[]
     */
    public $translations;
    /**
     * @var int
     */
    public $filteredCount;
    /**
     * @var bool
     */
    public $isNetwork;
    /**
     * @var int
     */
    public $finalPoint;
    /**
     * @var DominoTournamentPrize[]
     */
    public $prizes;
}