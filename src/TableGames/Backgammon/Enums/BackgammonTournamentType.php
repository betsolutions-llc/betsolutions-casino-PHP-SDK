<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static BackgammonTournamentType SCHEDULED()
 * @method static BackgammonTournamentType SITANDGO()
 */
class BackgammonTournamentType extends Enum
{
    private const SCHEDULED = 1;
    private const SITANDGO = 2;
}