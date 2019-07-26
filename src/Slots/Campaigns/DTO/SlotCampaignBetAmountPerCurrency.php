<?php


namespace Betsolutions\Casino\SDK\Slots\Campaigns\DTO;


class SlotCampaignBetAmountPerCurrency
{
    /**
     * @var int
     */
    public $coinCount;
    /**
     * @var int
     */
    public $coinValueId;
    /**
     * @var string
     */
    public $currency;

    public function __construct(int $coinCount, int $coinValueId, string $currency)
    {
        $this->currency = $currency;
        $this->coinCount = $coinCount;
        $this->coinValueId = $coinValueId;
    }
}