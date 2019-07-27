<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Seka\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static SekaTournamentStatus SCHEDULED()
 * @method static SekaTournamentStatus PLAYING()
 * @method static SekaTournamentStatus FINISHED()
 * @method static SekaTournamentStatus CANCELED()
 */
class SekaTournamentStatus extends Enum
{
    private const SCHEDULED = 1;
    private const PLAYING = 2;
    private const FINISHED = 3;
    private const CANCELED = 4;
}