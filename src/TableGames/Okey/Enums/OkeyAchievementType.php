<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Okey\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static OkeyAchievementType SEVEN_PAIR()
 * @method static OkeyAchievementType WIN_GAME()
 * @method static OkeyAchievementType TOURNAMENT_WIN()
 * @method static OkeyAchievementType FINISH_JOKER()
 * @method static OkeyAchievementType FAST_WIN()
 */
class OkeyAchievementType extends Enum
{
    private const SEVEN_PAIR = 1;
    private const WIN_GAME = 2;
    private const TOURNAMENT_WIN = 3;
    private const FINISH_JOKER = 4;
    private const FAST_WIN = 5;
}
