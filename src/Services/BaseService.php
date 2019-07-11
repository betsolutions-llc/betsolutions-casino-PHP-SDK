<?php


namespace Betsolutions\Casino\SDK\Services;


use Betsolutions\Casino\SDK\MerchantAuthInfo;

abstract class BaseService
{
    protected $authInfo;

    public function __construct(MerchantAuthInfo $authInfo)
    {
        $this->authInfo = $authInfo;
    }

    protected function getSha256(string $str): string
    {
        return hash('sha256', $str);
    }
}