<?php


namespace Betsolutions\Casino\SDK\Slots\Campaigns\DTO;


class GetSlotCampaignsRequest
{
    /**
     * @var int
     */
    public $campaignId;
    /**
     * @var string
     */
    public $endDateFrom;
    /**
     * @var string
     */
    public $endDateTo;
    /**
     * @var string
     */
    public $startDateFrom;
    /**
     * @var string
     */
    public $startDateTo;
    /**
     * @var int
     */
    public $statusId;
    /**
     * @var int
     */
    public $gameId;
    /**
     * @var string
     */
    public $name;
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