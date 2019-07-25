<?php

namespace Betsolutions\Casino\SDK;

class MerchantAuthInfo
{
    public $merchantId;
    public $privateKey;
    public $baseUrl;

    public function __construct($merchantId, $baseUrl, $privateKey)
    {
        $this->baseUrl = $baseUrl.'/v1';
        $this->merchantId = $merchantId;
        $this->privateKey = $privateKey;
    }
}
