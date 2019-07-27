<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Okey\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static OkeyTournamentType SCHEDULED()
 * @method static OkeyTournamentType SITANDGO()
 */
class OkeyTournamentType extends Enum
{
    private const SCHEDULED = 1;
    private const SITANDGO = 2;
}
