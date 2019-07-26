<?php


namespace Betsolutions\Casino\SDK\Services;


use Betsolutions\Casino\SDK\DTO\Rake\GetRakeRequest;
use Betsolutions\Casino\SDK\DTO\Rake\GetRakeResponseContainer;
use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use JsonMapper_Exception;

class RakeService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'Rake');
    }

    /**
     * @param GetRakeRequest $request
     * @return GetRakeResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getRake(GetRakeRequest $request): GetRakeResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetRake";

        $rawHash = "{$this->authInfo->merchantId}|{$request->userId}|{$request->fromDate}|{$request->toDate}|{$request->gameId}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['UserId'] = $request->userId;
        $data['GameId'] = $request->gameId;
        $data['FromDate'] = $request->fromDate;
        $data['ToDate'] = $request->toDate;
        $data['Hash'] = $hash;

        $response = $this->postRequest($url, $data);

        $result = new GetRakeResponseContainer();

        $result = $this->mapFromJsonToClass($response->body, $result);

        return $this->cast($result);
    }

    private function cast($obj): GetRakeResponseContainer
    {
        return $obj;
    }
}