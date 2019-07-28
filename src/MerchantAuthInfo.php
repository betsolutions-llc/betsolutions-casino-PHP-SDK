<?php

namespace Betsolutions\Casino\SDK;

class MerchantAuthInfo
{
    public $merchantId;
    public $privateKey;
    public $baseUrl;

    public function __construct(int $merchantId, string $baseUrl, string $privateKey)
    {
        $this->baseUrl = $baseUrl . '/v1';
        $this->merchantId = $merchantId;
        $this->privateKey = $privateKey;
    }
}
