<?php

namespace ZenCash\PaymentGateway\Zcash\Command\Wallet;

use ZenCash\PaymentGateway\Zcash\Command;

final class GetNewAddress implements Command
{
    private const METHOD = 'getnewaddress';

    public function jsonSerialize(): object
    {
        return (object) [
            'jsonrpc' => Command::JSON_RPC_VERSION,
            'id'      => Command::ID,
            'method'  => self::METHOD,
        ];
    }
}
