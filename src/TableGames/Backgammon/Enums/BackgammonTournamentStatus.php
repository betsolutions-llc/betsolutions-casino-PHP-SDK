<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static BackgammonTournamentStatus SCHEDULED()
 * @method static BackgammonTournamentStatus PLAYING()
 * @method static BackgammonTournamentStatus FINISHED()
 * @method static BackgammonTournamentStatus CANCELED()
 */
class BackgammonTournamentStatus extends Enum
{
    private const SCHEDULED = 1;
    private const PLAYING = 2;
    private const FINISHED = 3;
    private const CANCELED = 4;
}