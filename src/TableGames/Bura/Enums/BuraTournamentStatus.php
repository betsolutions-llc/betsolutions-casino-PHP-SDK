<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Bura\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static BuraTournamentStatus SCHEDULED()
 * @method static BuraTournamentStatus PLAYING()
 * @method static BuraTournamentStatus FINISHED()
 * @method static BuraTournamentStatus CANCELED()
 */
class BuraTournamentStatus extends Enum
{
    private const SCHEDULED = 1;
    private const PLAYING = 2;
    private const FINISHED = 3;
    private const CANCELED = 4;
}
