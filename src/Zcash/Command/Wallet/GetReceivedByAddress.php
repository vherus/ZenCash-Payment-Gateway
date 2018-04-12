<?php

namespace ZenCash\PaymentGateway\Zcash\Command\Wallet;

use ZenCash\PaymentGateway\Zcash\Command;

final class GetReceivedByAddress implements Command
{
    private const METHOD = 'getreceivedbyaddress';
    private $address;
    private $confirmed;

    public function __construct(string $address, int $confirmed = 1)
    {
        $this->address = $address;
        $this->confirmed = $confirmed;
    }

    public function jsonSerialize(): object
    {
        return (object) [
            'jsonrpc' => Command::JSON_RPC_VERSION,
            'id'      => Command::ID,
            'method'  => self::METHOD,
            'params' => (object) [
                $this->address,
                $this->confirmed
            ]
        ];
    }
}
