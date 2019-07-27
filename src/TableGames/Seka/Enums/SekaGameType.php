<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Seka\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static SekaGameType WITH_FIKE()
 * @method static SekaGameType WITHOUT_FIKE()
 */
class SekaGameType extends Enum
{
    private const WITH_FIKE = 1;
    private const WITHOUT_FIKE = 2;
}