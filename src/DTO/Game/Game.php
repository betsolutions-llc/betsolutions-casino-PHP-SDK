<?php


namespace Betsolutions\Casino\SDK\DTO\Game;


class Game
{
    /**
     * @var int
     */
    public $gameId;
    /**
     * @var int
     */
    public $productId;
    /**
     * @var bool
     */
    public $hasFreePlay;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $launchUrl;
    /**
     * @var float
     */
    public $rtp;
    /**
     * @var float
     */
    public $rakePercent;
    /**
     * @var bool
     */
    public $hasMobileDeviceSupport;
    /**
     * @var GameThumbnail[]
     */
    public $thumbnails;
}