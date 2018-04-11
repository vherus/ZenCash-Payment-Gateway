<?php

namespace ZenCash\PaymentGateway\Zcash;

interface Wrapper
{
    public function run(Command $command): object;
}
