<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Domino\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static DominoAchievementType WIN_GAME()
 * @method static DominoAchievementType TOURNAMENT_WIN()
 */
class DominoAchievementType extends Enum
{
    private const WIN_GAME = 1;
    private const TOURNAMENT_WIN = 2;
}