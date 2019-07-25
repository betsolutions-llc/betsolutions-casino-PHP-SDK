<?php


namespace Betsolutions\Casino\SDK\Services;


use Betsolutions\Casino\SDK\DTO\Wallet\GetBalanceRequest;
use Betsolutions\Casino\SDK\DTO\Wallet\GetBalanceResponseContainer;
use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Httpful\Exception\ConnectionErrorException;
use Httpful\Request;
use JsonMapper;

class WalletService extends BaseService
{
    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo, 'Wallet');
    }

    /**
     * @param GetBalanceRequest $request
     * @return GetBalanceResponseContainer
     * @throws CantConnectToServerException
     * @throws \JsonMapper_Exception
     */
    public function getBalance(GetBalanceRequest $request): GetBalanceResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetBalance";

        $rawHash = "{$request->currency}|{$this->authInfo->merchantId}|{$request->token}|{$request->userId}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['UserId'] = $request->userId;
        $data['Token'] = $request->token;
        $data['Currency'] = $request->currency;
        $data['Hash'] = $hash;

        try {
            /** @noinspection PhpUndefinedMethodInspection */
            $response = Request::post($url, json_encode($data))
                ->expectsJson()
                ->sendsJson()
                ->send();

        } /** @noinspection PhpRedundantCatchClauseInspection */
        catch (ConnectionErrorException $e) {

            throw new CantConnectToServerException($e->getCode(), $e->getMessage());
        }

        $result = new GetBalanceResponseContainer();
        $mapper = new JsonMapper();

        $result = $mapper->map($response->body, $result);

        return $this->cast($result);
    }

    private function cast($obj): GetBalanceResponseContainer
    {
        return $obj;
    }
}