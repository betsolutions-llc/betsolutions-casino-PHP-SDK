<?php


namespace Betsolutions\Casino\SDK\TableGames\Okey\DTO;


class OkeyTournament
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
     * @var int
     */
    public $tournamentTypeId;
    /**
     * @var int
     */
    public $statusId;
    /**
     * @var int
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
     * @var OkeyTournamentTranslation[]
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
     * @var OkeyTournamentPrize[]
     */
    public $prizes;
}