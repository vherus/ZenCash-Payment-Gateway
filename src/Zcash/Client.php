<?php

namespace ZenCash\PaymentGateway\Zcash;

use Psr\Http\Message\ResponseInterface;

interface Client
{
    public function execute(Command $command): ResponseInterface;
}
