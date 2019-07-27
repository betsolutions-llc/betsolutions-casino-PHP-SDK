<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\Slots\Campaigns\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static SlotCampaignStatus ACTIVE()
 * @method static SlotCampaignStatus COMPLETED()
 */
class SlotCampaignStatus extends Enum
{
    private const ACTIVE = 1;
    private const COMPLETED = 2;
}