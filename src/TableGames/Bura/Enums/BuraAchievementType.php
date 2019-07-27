<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Bura\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static BuraAchievementType THREE_OF_A_KIND()
 * @method static BuraAchievementType WIN_GAME()
 * @method static BuraAchievementType TOURNAMENT_WIN()
 * @method static BuraAchievementType MOLODKA()
 * @method static BuraAchievementType BURA()
 * @method static BuraAchievementType ROYAL_BURA()
 */
class BuraAchievementType extends Enum
{
    private const THREE_OF_A_KIND = 1;
    private const WIN_GAME = 2;
    private const TOURNAMENT_WIN = 3;
    private const MOLODKA = 4;
    private const BURA = 5;
    private const ROYAL_BURA = 6;
}
