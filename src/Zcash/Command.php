<?php

namespace ZenCash\PaymentGateway\Zcash;

interface Command extends \JsonSerializable
{
    public const JSON_RPC_VERSION = '1.0';
    public const ID = 'curl';
}
