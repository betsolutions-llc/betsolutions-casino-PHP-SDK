<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static BackgammonAchievementType ROLL()
 * @method static BackgammonAchievementType WIN_GAME()
 * @method static BackgammonAchievementType TOURNAMENT_WIN()
 * @method static BackgammonAchievementType MARS()
 * @method static BackgammonAchievementType DOUBLE_MARS()
 * @method static BackgammonAchievementType ROYAL_DEFENSE()
 * @method static BackgammonAchievementType STONE_KILLER()
 */
class BackgammonAchievementType extends Enum
{
    private const ROLL = 1;
    private const WIN_GAME = 2;
    private const TOURNAMENT_WIN = 3;
    private const MARS = 4;
    private const DOUBLE_MARS = 5;
    private const ROYAL_DEFENSE = 6;
    private const STONE_KILLER = 7;
}
