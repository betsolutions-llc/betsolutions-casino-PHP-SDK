<?php


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\DTO;


class BackgammonTournament
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
     * @var \Betsolutions\Casino\SDK\TableGames\Backgammon\Enums\BackgammonTournamentType
     */
    public $tournamentTypeId;
    /**
     * @var \Betsolutions\Casino\SDK\TableGames\Backgammon\Enums\BackgammonTournamentStatus
     */
    public $statusId;
    /**
     * @var \Betsolutions\Casino\SDK\TableGames\Backgammon\Enums\BackgammonGameType
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
     * @var BackgammonTournamentTranslation[]
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
     * @var BackgammonTournamentPrize[]
     */
    public $prizes;
}