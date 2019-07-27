<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Okey\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static OkeyTournamentStatus SCHEDULED()
 * @method static OkeyTournamentStatus PLAYING()
 * @method static OkeyTournamentStatus FINISHED()
 * @method static OkeyTournamentStatus CANCELED()
 */
class OkeyTournamentStatus extends Enum
{
    private const SCHEDULED = 1;
    private const PLAYING = 2;
    private const FINISHED = 3;
    private const CANCELED = 4;
}