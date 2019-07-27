<?php


namespace Betsolutions\Casino\SDK\TableGames\Bura\DTO;


class BuraAchievement
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
     * @var \Betsolutions\Casino\SDK\TableGames\Bura\Enums\BuraAchievementType
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
     * @var BuraAchievementTranslation[]
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