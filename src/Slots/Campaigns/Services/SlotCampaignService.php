<?php


namespace Betsolutions\Casino\SDK\Slots\Campaigns\Services;


use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Betsolutions\Casino\SDK\Services\BaseService;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\AddPlayersToCampaignResponseContainer;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\AddPlayersToSlotCampaignRequest;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\CreateSlotCampaignRequest;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\CreateSlotCampaignResponseContainer;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\DeactivateSlotCampaignRequest;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\DeactivateSlotCampaignResponseContainer;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\GetSlotCampaignsRequest;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\GetSlotCampaignsResponseContainer;
use Betsolutions\Casino\SDK\Slots\Campaigns\DTO\GetSlotConfigsResponseContainer;
use JsonMapper_Exception;

class SlotCampaignService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'SlotCampaign');
    }

    private function generateBetAmountsPerCurrency(array $betAmounts)
    {
        $result = array();

        foreach ($betAmounts as $k => $v) {

            $newObj['CoinCount'] = $v->coinCount;
            $newObj['CoinValueId'] = $v->coinValueId;
            $newObj['Currency'] = $v->currency;

            array_push($result, $newObj);
        }

        return $result;
    }

    /**
     * @param CreateSlotCampaignRequest $request
     * @return CreateSlotCampaignResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function createSlotCampaign(CreateSlotCampaignRequest $request): CreateSlotCampaignResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/CreateSlotCampaign";

        $betAmounts = $this->generateBetAmountsPerCurrency($request->betAmountsPerCurrency);

        $betAmountsJson = json_encode($betAmounts);
        $playerIdsJson = json_encode($request->playerIds);

        $rawHash = "{$request->campaignTypeId}|{$request->endDate}|{$request->startDate}|{$request->freespinCount}|{$request->gameId}|{$this->authInfo->merchantId}|{$request->name}|{$betAmountsJson}|{$playerIdsJson}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['PlayerIds'] = $request->playerIds;
        $data['BetAmountsPerCurrency'] = $betAmounts;
        $data['StartDate'] = $request->startDate;
        $data['EndDate'] = $request->endDate;
        $data['GameId'] = $request->gameId;
        $data['Name'] = $request->name;
        $data['FreespinCount'] = $request->freespinCount;
        $data['AddNewlyRegisteredPlayers'] = $request->addNewlyRegisteredPlayers;
        $data['CampaignTypeId'] = $request->campaignTypeId;
        $data['Hash'] = $hash;

        $response = $this->postRequest($url, $data);

        $result = new CreateSlotCampaignResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castCreateSlotCampaignModel($result);
    }

    /**
     * @param DeactivateSlotCampaignRequest $request
     * @return DeactivateSlotCampaignResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function deactivateSlotCampaign(DeactivateSlotCampaignRequest $request): DeactivateSlotCampaignResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/DeactivateSlotCampaign";

        $rawHash = "{$this->authInfo->merchantId}|{$request->id}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['Id'] = $request->id;
        $data['Hash'] = $hash;

        $response = $this->postRequest($url, $data);

        $result = new DeactivateSlotCampaignResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castDeactivateSlotCampaignModel($result);
    }

    /**
     * @return GetSlotConfigsResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getSlotConfigs(): GetSlotConfigsResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetMerchantSlotConfigs";

        $rawHash = "{$this->authInfo->merchantId}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['Hash'] = $hash;

        $response = $this->postRequest($url, $data);

        $result = new GetSlotConfigsResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castGetSlotConfigsModel($result);
    }

    /**
     * @param GetSlotCampaignsRequest $request
     * @return GetSlotCampaignsResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getSlotCampaigns(GetSlotCampaignsRequest $request): GetSlotCampaignsResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetSlotCampaigns";

        $rawHash = "{$this->authInfo->merchantId}|{$request->campaignId}|{$request->endDateFrom}|{$request->endDateTo}|{$request->startDateFrom}|{$request->startDateTo}|"
            . "{$request->statusId}|{$request->gameId}|{$request->name}|{$request->orderingDirection}|{$request->orderingField}|{$request->pageIndex}|{$request->pageSize}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['EndDateFrom'] = $request->endDateFrom;
        $data['EndDateTo'] = $request->endDateTo;
        $data['StartDateFrom'] = $request->startDateFrom;
        $data['StartDateTo'] = $request->startDateTo;
        $data['StatusId'] = $request->statusId;
        $data['GameId'] = $request->gameId;
        $data['Name'] = $request->name;
        $data['OrderingDirection'] = $request->orderingDirection;
        $data['OrderingField'] = $request->orderingField;
        $data['PageIndex'] = $request->pageIndex;
        $data['PageSize'] = $request->pageSize;
        $data['Hash'] = $hash;

        $response = $this->postRequest($url, $data);

        $result = new GetSlotCampaignsResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castGetSlotCampaignsModel($result);
    }

    /**
     * @param AddPlayersToSlotCampaignRequest $request
     * @return AddPlayersToCampaignResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function addPlayersToCampaign(AddPlayersToSlotCampaignRequest $request): AddPlayersToCampaignResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/AddPlayersToSlotCampaign";

        $playerIdsJson = json_encode($request->playerIds);

        $rawHash = "{$request->campaignId}|{$this->authInfo->merchantId}|{$playerIdsJson}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['PlayerIds'] = $request->playerIds;
        $data['CampaignId'] = $request->campaignId;
        $data['Hash'] = $hash;

        $response = $this->postRequest($url, $data);

        $result = new AddPlayersToCampaignResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castAddPlayersToCampaignResponseModel($result);
    }

    private function castCreateSlotCampaignModel($obj): CreateSlotCampaignResponseContainer
    {
        return $obj;
    }

    private function castDeactivateSlotCampaignModel($obj): DeactivateSlotCampaignResponseContainer
    {
        return $obj;
    }

    private function castGetSlotConfigsModel($obj): GetSlotConfigsResponseContainer
    {
        return $obj;
    }

    private function castGetSlotCampaignsModel($obj): GetSlotCampaignsResponseContainer
    {
        return $obj;
    }

    private function castAddPlayersToCampaignResponseModel($obj): AddPlayersToCampaignResponseContainer
    {
        return $obj;
    }
}