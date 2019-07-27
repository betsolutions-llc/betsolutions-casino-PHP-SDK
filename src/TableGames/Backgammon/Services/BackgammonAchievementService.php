<?php


namespace Betsolutions\Casino\SDK\TableGames\Backgammon\Services;


use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Betsolutions\Casino\SDK\Services\BaseService;
use Betsolutions\Casino\SDK\TableGames\Backgammon\DTO\GetBackgammonAchievementsRequest;
use Betsolutions\Casino\SDK\TableGames\Backgammon\DTO\GetBackgammonAchievementsResponseContainer;
use JsonMapper_Exception;

class BackgammonAchievementService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'BackgammonAchievement');
    }

    /**
     * @param GetBackgammonAchievementsRequest $request
     * @return GetBackgammonAchievementsResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getAchievements(GetBackgammonAchievementsRequest $request): GetBackgammonAchievementsResponseContainer
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

        $result = new GetBackgammonAchievementsResponseContainer();

        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castAchievements($result);
    }

    private function castAchievements($obj): GetBackgammonAchievementsResponseContainer
    {
        return $obj;
    }
}