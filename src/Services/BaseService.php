<?php


namespace Betsolutions\Casino\SDK\Services;


use Betsolutions\Casino\SDK\MerchantAuthInfo;

abstract class BaseService
{
    protected $authInfo;
    protected $controller;
    protected $EMPTY_OBJECT;

    public function __construct(MerchantAuthInfo $authInfo, string $controller)
    {
        $this->EMPTY_OBJECT  = (object)[];
        $this->authInfo = $authInfo;
        $this->controller = $controller;
    }

    protected function getSha256(string $str): string
    {
        return hash('sha256', $str);
    }
}