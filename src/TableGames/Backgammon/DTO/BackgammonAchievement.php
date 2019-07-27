<?php


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\DTO;


use Betsolutions\Casino\SDK\TableGames\Backgammon\Enums\BackgammonAchievementType;

class BackgammonAchievement
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
     * @var BackgammonAchievementType
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
     * @var int
     */
    public $dice1;
    /**
     * @var int
     */
    public $dice2;
    /**
     * @var boolean
     */
    public $isActive;
    /**
     * @var BackgammonAchievementTranslation[]
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