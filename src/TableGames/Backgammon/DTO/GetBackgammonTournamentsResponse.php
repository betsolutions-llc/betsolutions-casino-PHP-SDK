<?php


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\DTO;


class GetBackgammonTournamentsResponse
{
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var BackgammonTournament[]
     */
    public $tournaments;
}