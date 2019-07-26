<?php


namespace Betsolutions\Casino\SDK\Services;


use Betsolutions\Casino\SDK\Exceptions\CantConnectToServerException;
use Betsolutions\Casino\SDK\MerchantAuthInfo;
use Httpful\Exception\ConnectionErrorException;
use Httpful\Request;
use Httpful\Response;
use JsonMapper;
use JsonMapper_Exception;

abstract class BaseService
{
    protected $authInfo;
    protected $controller;
    protected $EMPTY_ARRAY;
    private $jsonMapper;

    public function __construct(MerchantAuthInfo $authInfo, string $controller)
    {
        $this->EMPTY_ARRAY = [];
        $this->authInfo = $authInfo;
        $this->controller = $controller;
        $this->jsonMapper = new JsonMapper();
    }

    protected function getSha256(string $str): string
    {
        return hash('sha256', $str);
    }

    /**
     * @param string $url
     * @param array $data
     * @return Response
     * @throws CantConnectToServerException
     */
    protected function postRequest(string $url, array $data): Response
    {
        try {
            /** @noinspection PhpUndefinedMethodInspection */
            $response = Request::post($url, json_encode($data))
                ->expectsJson()
                ->sendsJson()
                ->send();

            $response = $this->castResponse($response);

            if ($response->hasErrors()) {
                throw new CantConnectToServerException($response->code);
            }

            return $response;

        } /** @noinspection PhpRedundantCatchClauseInspection */
        catch (ConnectionErrorException $e) {

            throw new CantConnectToServerException($e->getCode(), $e->getMessage());
        }
    }

    /**
     * @param object $data
     * @param object $model
     * @return object
     * @throws JsonMapper_Exception
     */
    protected function mapFromJsonToClass(object $data, object $model): object
    {
        return $this->jsonMapper->map($data, $model);
    }

    private function castResponse($obj): Response
    {
        return $obj;
    }
}