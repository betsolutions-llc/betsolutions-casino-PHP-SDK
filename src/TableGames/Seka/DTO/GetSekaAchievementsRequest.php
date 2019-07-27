<?php


namespace Betsolutions\Casino\SDK\TableGames\Seka\DTO;


use Betsolutions\Casino\SDK\TableGames\Seka\Enums\SekaAchievementType;

class GetSekaAchievementsRequest
{
    /**
     * @var SekaAchievementType
     */
    public $achievementTypeId;
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
        $this->pageIndex = $pageIndex;
        $this->pageSize = $pageSize;
    }
}