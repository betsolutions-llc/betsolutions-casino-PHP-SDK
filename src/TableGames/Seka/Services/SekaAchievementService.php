<?php


namespace Betsolutions\Casino\SDK\TableGames\Seka\Services;


use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\Exceptions\JsonMappingException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Betsolutions\Casino\SDK\Services\BaseService;
use Betsolutions\Casino\SDK\TableGames\Seka\DTO\GetSekaAchievementsRequest;
use Betsolutions\Casino\SDK\TableGames\Seka\DTO\GetSekaAchievementsResponseContainer;

class SekaAchievementService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'SekaAchievement');
    }

    /**
     * @param GetSekaAchievementsRequest $request
     * @return GetSekaAchievementsResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMappingException
     */
    public function getAchievements(GetSekaAchievementsRequest $request): GetSekaAchievementsResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetAchievements";

        $rawHash = "{$this->authInfo->merchantId}|{$request->achievementTypeId}|{$request->orderingDirection}|{$request->orderingField}|"
            . "{$request->pageIndex}|{$request->pageSize}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['AchievementTypeId'] = $request->achievementTypeId;
        $data['OrderingDirection'] = $request->orderingDirection;
        $data['OrderingField'] = $request->orderingField;
        $data['PageIndex'] = $request->pageIndex;
        $data['PageSize'] = $request->pageSize;
        $data['Hash'] = $hash;


        $response = $this->postRequest($url, $data);

        $result = new GetSekaAchievementsResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castAchievements($result);
    }

    private function castAchievements($obj): GetSekaAchievementsResponseContainer
    {
        return $obj;
    }
}