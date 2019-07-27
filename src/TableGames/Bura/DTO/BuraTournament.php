<?php


namespace Betsolutions\Casino\SDK\TableGames\Bura\DTO;


class BuraTournament
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
     * @var BuraTournamentTranslation[]
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
     * @var BuraTournamentPrize[]
     */
    public $prizes;
    /**
     * @var bool
     */
    public $hasRoyalRule;
    /**
     * @var bool
     */
    public $hasMolodkaRule;
}