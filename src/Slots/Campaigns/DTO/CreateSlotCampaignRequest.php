<?php


namespace Betsolutions\Casino\SDK\Slots\Campaigns\DTO;


class CreateSlotCampaignRequest
{
    /**
     * @var int
     */
    public $campaignTypeId;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var int
     */
    public $freespinCount;
    /**
     * @var int
     */
    public $gameId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var SlotCampaignBetAmountPerCurrency[]
     */
    public $betAmountsPerCurrency;
    /**
     * @var string[]
     */
    public $playerIds;
    /**
     * @var bool
     */
    public $addNewlyRegisteredPlayers;

    public function __construct(
        int $campaignTypeId,
        string $endDate,
        string $startDate,
        int $freespinCount,
        int $gameId,
        string $name,
        array $betAmountsPerCurrency,
        array $playerIds,
        bool $addNewlyRegisteredPlayers = false
    )
    {
        $this->gameId = $gameId;
        $this->name = $name;
        $this->addNewlyRegisteredPlayers = $addNewlyRegisteredPlayers;
        $this->endDate = $endDate;
        $this->startDate = $startDate;
        $this->freespinCount = $freespinCount;
        $this->betAmountsPerCurrency = $betAmountsPerCurrency;
        $this->playerIds = $playerIds;
        $this->campaignTypeId = $campaignTypeId;
    }
}