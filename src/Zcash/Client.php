<?php

namespace ZenCash\PaymentGateway\Zcash;

interface Client
{
    public function execute(Command $command): object;
}
