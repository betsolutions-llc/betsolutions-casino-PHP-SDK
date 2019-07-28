<?php


namespace Betsolutions\Casino\SDK\TableGames\Bura\Services;


use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\Exceptions\JsonMappingException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Betsolutions\Casino\SDK\Services\BaseService;
use Betsolutions\Casino\SDK\TableGames\Bura\DTO\GetBuraAchievementsRequest;
use Betsolutions\Casino\SDK\TableGames\Bura\DTO\GetBuraAchievementsResponseContainer;

class BuraAchievementService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'BuraAchievement');
    }

    /**
     * @param GetBuraAchievementsRequest $request
     * @return GetBuraAchievementsResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMappingException
     */
    public function getAchievements(GetBuraAchievementsRequest $request): GetBuraAchievementsResponseContainer
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

        $result = new GetBuraAchievementsResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castAchievements($result);
    }

    private function castAchievements($obj): GetBuraAchievementsResponseContainer
    {
        return $obj;
    }
}