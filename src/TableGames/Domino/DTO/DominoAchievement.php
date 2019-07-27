<?php


namespace Betsolutions\Casino\SDK\TableGames\Domino\DTO;


class DominoAchievement
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $createDate;
    /**
     * @var \Betsolutions\Casino\SDK\TableGames\Domino\Enums\DominoAchievementType
     */
    public $achievementTypeId;
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $minRank;
    /**
     * @var int
     */
    public $prize;
    /**
     * @var boolean
     */
    public $isActive;
    /**
     * @var DominoAchievementTranslation[]
     */
    public $translations;
    /**
     * @var int
     */
    public $filteredCount;
    /**
     * @var boolean
     */
    public $isNetwork;
}