<?php


namespace Betsolutions\Casino\SDK\TableGames\Seka\DTO;


class SekaTournament
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
     * @var \Betsolutions\Casino\SDK\TableGames\Seka\Enums\SekaTournamentType
     */
    public $tournamentTypeId;
    /**
     * @var \Betsolutions\Casino\SDK\TableGames\Seka\Enums\SekaTournamentStatus
     */
    public $statusId;
    /**
     * @var \Betsolutions\Casino\SDK\TableGames\Seka\Enums\SekaGameType
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
     * @var SekaTournamentTranslation[]
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
     * @var SekaTournamentPrize[]
     */
    public $prizes;
    /**
     * @var bool
     */
    public $withRebuy;
    /**
     * @var int
     */
    public $rebuyMaxLevel;
}