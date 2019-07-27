<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Seka\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static SekaTournamentType SCHEDULED()
 * @method static SekaTournamentType SITANDGO()
 */
class SekaTournamentType extends Enum
{
    private const SCHEDULED = 1;
    private const SITANDGO = 2;
}