<?php

namespace ZenCash\PaymentGateway\Zcash\Command\Util;

use ZenCash\PaymentGateway\Zcash\Command;

final class ValidateAddress implements Command
{
    private const METHOD = 'validateaddress';
    private $address;

    public function __construct(string $address)
    {
        $this->address = $address;
    }

    public function jsonSerialize()
    {
        return (object) [
            'jsonrpc' => Command::JSON_RPC_VERSION,
            'id'      => Command::ID,
            'method'  => self::METHOD,
            'params' => [$this->address]
        ];
    }
}
