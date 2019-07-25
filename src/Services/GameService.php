<?php


namespace Betsolutions\Casino\SDK\Services;


use Betsolutions\Casino\SDK\DTO\Game\GetGamesResponseContainer;
use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Httpful\Exception\ConnectionErrorException;
use Httpful\Request;
use JsonMapper;
use JsonMapper_Exception;

class GameService extends BaseService
{
    private $controller = 'Game';

    public function __construct(MerchantAuthInfo $authInfo)
    {
        parent::__construct($authInfo);
    }

    /**
     * @return GetGamesResponseContainer
     * @throws CantConnectToServerException
     * @throws JsonMapper_Exception
     */
    public function getGames(): GetGamesResponseContainer
    {
        $url = "{$this->authInfo->baseUrl}/{$this->controller}/GetGameList";

        $rawHash = "{$this->authInfo->merchantId}|{$this->authInfo->privateKey}";
        $hash = $this->getSha256($rawHash);

        $data['MerchantId'] = $this->authInfo->merchantId;
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

        $result = new GetGamesResponseContainer();
        $mapper = new JsonMapper();

        $result = $mapper->map($response->body, $result);

        return $this->cast($result);
    }

    public function cast($obj): GetGamesResponseContainer
    {
        return $obj;
    }
}