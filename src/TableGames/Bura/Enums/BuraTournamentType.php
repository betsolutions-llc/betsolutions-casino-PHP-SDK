<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Bura\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static BuraTournamentType SCHEDULED()
 * @method static BuraTournamentType SITANDGO()
 */
class BuraTournamentType extends Enum
{
    private const SCHEDULED = 1;
    private const SITANDGO = 2;
}
