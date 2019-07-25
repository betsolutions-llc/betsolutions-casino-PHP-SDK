<?php


namespace Betsolutions\Casino\SDK\DTO\Wallet;


class GetBalanceRequest
{
    /**
     * @var string
     */
    public $token;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $currency;

    public function __construct(string $token, string $userId, string $currency)
    {
        $this->currency = $currency;
        $this->token = $token;
        $this->userId = $userId;
    }
}