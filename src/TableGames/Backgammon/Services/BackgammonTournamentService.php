<?php


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\Services;


use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Betsolutions\Casino\SDK\Services\BaseService;
use Betsolutions\Casino\SDK\TableGames\Backgammon\DTO\GetBackgammonTournamentsRequest;
use Betsolutions\Casino\SDK\TableGames\Backgammon\DTO\GetBackgammonTournamentsResponseContainer;
use Betsolutions\Casino\SDK\TableGames\Backgammon\DTO\GetBackgammonTournamentStatusesResponseContainer;
use Betsolutions\Casino\SDK\TableGames\Backgammon\DTO\GetBackgammonTournamentTypesResponseContainer;
use JsonMapper;
use JsonMapper_Exception;

class BackgammonTournamentService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'BackgammonTournament');
    }

    /**
     * @param GetBackgammonTournamentsRequest $request
     * @return GetBackgammonTournamentsResponseContainer
     * @throws JsonMapper_Exception
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
        $mapper = new JsonMapper();

        $result = $mapper->map($response->body, $result);

        return $this->cast($result);
    }

    /**
     * @return GetBackgammonTournamentTypesResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getTournamentTypes(): GetBackgammonTournamentTypesResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetTournamentTypes";

        $response = $this->postRequest($url, $this->EMPTY_ARRAY);

        $result = new GetBackgammonTournamentTypesResponseContainer();
        $mapper = new JsonMapper();

        $result = $mapper->map($response->body, $result);

        return $this->castTypes($result);
    }

    /**
     * @return GetBackgammonTournamentStatusesResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getTournamentStatuses(): GetBackgammonTournamentStatusesResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetTournamentStatuses";

        $response = $this->postRequest($url, $this->EMPTY_ARRAY);

        $result = new GetBackgammonTournamentStatusesResponseContainer();
        $mapper = new JsonMapper();

        $result = $mapper->map($response->body, $result);

        return $this->castStatuses($result);
    }

    private function cast($obj): GetBackgammonTournamentsResponseContainer
    {
        return $obj;
    }

    private function castTypes($obj): GetBackgammonTournamentTypesResponseContainer
    {
        return $obj;
    }

    private function castStatuses($obj): GetBackgammonTournamentStatusesResponseContainer
    {
        return $obj;
    }
}