<?php


namespace Betsolutions\Casino\SDK\Services;


use Betsolutions\Casino\SDK\DTO\Wallet\DepositRequest;
use Betsolutions\Casino\SDK\DTO\Wallet\DepositResponseContainer;
use Betsolutions\Casino\SDK\DTO\Wallet\GetBalanceRequest;
use Betsolutions\Casino\SDK\DTO\Wallet\GetBalanceResponseContainer;
use Betsolutions\Casino\SDK\DTO\Wallet\WithdrawRequest;
use Betsolutions\Casino\SDK\DTO\Wallet\WithdrawResponseContainer;
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

        return $this->castGetBalance($result);
    }

    /**
     * @param DepositRequest $request
     * @return DepositResponseContainer
     * @throws CantConnectToServerException
     * @throws \JsonMapper_Exception
     */
    public function deposit(DepositRequest $request): DepositResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/Deposit";

        $rawHash = "{$request->amount}|{$request->currency}|{$this->authInfo->merchantId}|{$request->transactionId}|{$request->token}|{$request->userId}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['UserId'] = $request->userId;
        $data['Amount'] = $request->amount;
        $data['TransactionId'] = $request->transactionId;
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

        $result = new DepositResponseContainer();
        $mapper = new JsonMapper();

        $result = $mapper->map($response->body, $result);

        return $this->castDeposit($result);
    }

    /**
     * @param WithdrawRequest $request
     * @return WithdrawResponseContainer
     * @throws CantConnectToServerException
     * @throws \JsonMapper_Exception
     */
    public function withdraw(WithdrawRequest $request): WithdrawResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/Withdraw";

        $rawHash = "{$request->amount}|{$request->currency}|{$this->authInfo->merchantId}|{$request->transactionId}|{$request->token}|{$request->userId}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
        $data['UserId'] = $request->userId;
        $data['Amount'] = $request->amount;
        $data['TransactionId'] = $request->transactionId;
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

        $result = new WithdrawResponseContainer();
        $mapper = new JsonMapper();

        $result = $mapper->map($response->body, $result);

        return $this->castWithdraw($result);
    }

    private function castGetBalance($obj): GetBalanceResponseContainer
    {
        return $obj;
    }

    private function castDeposit($obj): DepositResponseContainer
    {
        return $obj;
    }

    private function castWithdraw($obj): WithdrawResponseContainer
    {
        return $obj;
    }
}