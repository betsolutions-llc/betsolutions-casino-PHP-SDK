<?php


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\Services;

use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\Exceptions\JsonMappingException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Betsolutions\Casino\SDK\Services\BaseService;
use Betsolutions\Casino\SDK\TableGames\Backgammon\DTO\GetBackgammonTournamentsRequest;
use Betsolutions\Casino\SDK\TableGames\Backgammon\DTO\GetBackgammonTournamentsResponseContainer;

class BackgammonTournamentService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'BackgammonTournament');
    }

    /**
     * @param GetBackgammonTournamentsRequest $request
     * @return GetBackgammonTournamentsResponseContainer
     * @throws JsonMappingException
     * @throws CantConnectToServerException
     */
    public function getTournaments(GetBackgammonTournamentsRequest $request): GetBackgammonTournamentsResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetTournaments";

        $rawHash = "{$this->authInfo->merchantId}|{$request->endDateTo}|{$request->endDateFrom}|{$request->gameTypeId}|{$request->orderingDirection}|{$request->orderingField}|"
            . "{$request->pageIndex}|{$request->pageSize}|{$request->startDateFrom}|{$request->startDateTo}|{$request->tournamentTypeId}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['EndDateFrom'] = $request->endDateFrom;
        $data['EndDateTo'] = $request->endDateTo;
        $data['StartDateFrom'] = $request->startDateFrom;
        $data['StartDateTo'] = $request->startDateTo;
        $data['GameTypeId'] = $request->gameTypeId;
        $data['TournamentTypeId'] = $request->tournamentTypeId;
        $data['OrderingDirection'] = $request->orderingDirection;
        $data['OrderingField'] = $request->orderingField;
        $data['PageIndex'] = $request->pageIndex;
        $data['PageSize'] = $request->pageSize;
        $data['Hash'] = $hash;

        $response = $this->postRequest($url, $data);

        $result = new GetBackgammonTournamentsResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->cast($result);
    }

    private function cast($obj): GetBackgammonTournamentsResponseContainer
    {
        return $obj;
    }
}