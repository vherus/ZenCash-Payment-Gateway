<?php

namespace ZenCash\PaymentGateway\Zcash\Command\Util;

use ZenCash\PaymentGateway\Zcash\Command;

final class ZValidateAddress implements Command
{
    private const METHOD = 'z_validateaddress';
    private $zAddress;

    public function __construct(string $zAddress)
    {
        $this->zAddress = $zAddress;
    }

    public function jsonSerialize(): object
    {
        return (object) [
            'jsonrpc' => Command::JSON_RPC_VERSION,
            'id'      => Command::ID,
            'method'  => self::METHOD,
            'params' => [$this->zAddress]
        ];
    }
}
