<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Domino\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static DominoTournamentType SCHEDULED()
 * @method static DominoTournamentType SITANDGO()
 */
class DominoTournamentType extends Enum
{
    private const SCHEDULED = 1;
    private const SITANDGO = 2;
}