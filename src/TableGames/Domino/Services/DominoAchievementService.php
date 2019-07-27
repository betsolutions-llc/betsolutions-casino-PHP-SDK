<?php


namespace Betsolutions\Casino\SDK\TableGames\Domino\Services;


use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Betsolutions\Casino\SDK\Services\BaseService;
use Betsolutions\Casino\SDK\TableGames\Domino\DTO\GetDominoAchievementsRequest;
use Betsolutions\Casino\SDK\TableGames\Domino\DTO\GetDominoAchievementsResponseContainer;
use JsonMapper_Exception;

class DominoAchievementService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'DominoAchievement');
    }

    /**
     * @param GetDominoAchievementsRequest $request
     * @return GetDominoAchievementsResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getAchievements(GetDominoAchievementsRequest $request): GetDominoAchievementsResponseContainer
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

        $result = new GetDominoAchievementsResponseContainer();

        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->castAchievements($result);
    }

    private function castAchievements($obj): GetDominoAchievementsResponseContainer
    {
        return $obj;
    }
}