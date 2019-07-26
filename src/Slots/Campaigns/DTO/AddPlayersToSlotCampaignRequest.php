<?php


namespace Betsolutions\Casino\SDK\Slots\Campaigns\DTO;


class AddPlayersToSlotCampaignRequest
{
    /**
     * @var int
     */
    public $campaignId;
    /**
     * @var string[]
     */
    public $playerIds;

    public function __construct(int $campaignId, array $playerIds)
    {
        $this->campaignId = $campaignId;
        $this->playerIds = $playerIds;
    }
}