<?php /** @noinspection PhpUnusedPrivateFieldInspection */


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static BackgammonGameType EUROPEAN()
 * @method static BackgammonGameType GEORGIAN()
 * @method static BackgammonGameType LONG()
 * @method static BackgammonGameType HYPER()
 * @method static BackgammonGameType KHACHAPURI()
 * @method static BackgammonGameType EUREKA()
 * @method static BackgammonGameType BLITZ()
 */
class BackgammonGameType extends Enum
{
    private const EUROPEAN = 1;
    private const GEORGIAN = 2;
    private const LONG = 3;
    private const HYPER = 4;
    private const KHACHAPURI = 5;
    private const EUREKA = 6;
    private const BLITZ = 7;
}