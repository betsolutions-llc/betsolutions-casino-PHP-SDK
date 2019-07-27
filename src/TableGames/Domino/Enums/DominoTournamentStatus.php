<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Domino\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static DominoTournamentStatus SCHEDULED()
 * @method static DominoTournamentStatus PLAYING()
 * @method static DominoTournamentStatus FINISHED()
 * @method static DominoTournamentStatus CANCELED()
 */
class DominoTournamentStatus extends Enum
{
    private const SCHEDULED = 1;
    private const PLAYING = 2;
    private const FINISHED = 3;
    private const CANCELED = 4;
}