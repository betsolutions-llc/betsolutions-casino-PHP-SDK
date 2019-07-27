<?php


namespace Betsolutions\Casino\SDK\TableGames\Seka\DTO;


class SekaAchievement
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
     * @var \Betsolutions\Casino\SDK\TableGames\Seka\Enums\SekaAchievementType
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
     * @var SekaAchievementTranslation[]
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
    /**
     * @var int
     */
    public $card;
}