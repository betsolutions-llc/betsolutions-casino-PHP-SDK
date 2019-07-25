<?php


namespace Betsolutions\Casino\SDK\DTO\Wallet;


class WithdrawRequest
{
    /**
     * @var int
     */
    public $amount;
    /**
     * @var string
     */
    public $transactionId;
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

    public function __construct(
        int $amount,
        string $transactionId,
        string $token,
        string $userId,
        string $currency
    )
    {
        $this->userId = $userId;
        $this->token = $token;
        $this->currency = $currency;
        $this->amount = $amount;
        $this->transactionId = $transactionId;
    }
}