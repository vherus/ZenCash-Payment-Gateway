<?php

namespace ZenCash\PaymentGateway\Zcash\Command\Wallet;

use ZenCash\PaymentGateway\Zcash\Command;

final class GetNewAddress implements Command
{
    private const METHOD = 'getnewaddress';

    /** @var mixed[]|null */
    private $params;

    public function __construct(?array $params)
    {
        $this->params = $params;
    }

    public function jsonSerialize(): object
    {
        return (object) array_merge([
            'jsonrpc' => Command::JSON_RPC_VERSION,
            'id'      => Command::ID,
            'method'  => self::METHOD,
        ], !is_null($this->params) ? ['params' => $this->params] : []);
    }
}
