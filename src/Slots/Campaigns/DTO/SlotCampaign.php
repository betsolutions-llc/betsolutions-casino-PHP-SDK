<?php


namespace Betsolutions\Casino\SDK\Slots\Campaigns\DTO;


class SlotCampaign
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var int
     */
    public $gameId;
    /**
     * @var \Betsolutions\Casino\SDK\Slots\Campaigns\Enums\SlotCampaignType
     */
    public $campaignTypeId;
    /**
     * @var int
     */
    public $freespinCount;
    /**
     * @var \Betsolutions\Casino\SDK\Slots\Campaigns\Enums\SlotCampaignStatus
     */
    public $statusId;
    /**
     * @var int
     */
    public $playerCount;
    /**
     * @var int
     */
    public $filteredCount;
}