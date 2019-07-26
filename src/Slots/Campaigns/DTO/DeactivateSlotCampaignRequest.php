<?php


namespace Betsolutions\Casino\SDK\Slots\Campaigns\DTO;


class DeactivateSlotCampaignRequest
{
    /**
     * @var int
     */
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}