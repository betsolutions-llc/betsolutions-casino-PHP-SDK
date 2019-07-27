<?php


namespace Betsolutions\Casino\SDK\TableGames\Okey\Services;


use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Betsolutions\Casino\SDK\Services\BaseService;
use Betsolutions\Casino\SDK\TableGames\Okey\DTO\GetOkeyAchievementsRequest;
use Betsolutions\Casino\SDK\TableGames\Okey\DTO\GetOkeyAchievementsResponseContainer;
use JsonMapper_Exception;

class OkeyAchievementService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'OkeyAchievement');
    }

    /**
     * @param GetOkeyAchievementsRequest $request
     * @return GetOkeyAchievementsResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getAchievements(GetOkeyAchievementsRequest $request): GetOkeyAchievementsResponseContainer
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

        $result = new GetOkeyAchievementsResponseContainer();
        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castAchievements($result);
    }

    private function castAchievements($obj): GetOkeyAchievementsResponseContainer
    {
        return $obj;
    }
}