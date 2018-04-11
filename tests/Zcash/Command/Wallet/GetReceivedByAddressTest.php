<?php

namespace ZenCash\PaymentGateway\Zcash\Command\Wallet;

use PHPUnit\Framework\TestCase;

class GetReceivedByAddressTest extends TestCase
{
    public function test_serialize_without_params_constructs_expected_object()
    {
        $expected = (object) [
            'jsonrpc' => '1.0',
            'id'      => 'curl',
            'method'  => 'getreceivedbyaddress',
        ];

        $this->assertEquals($expected, (new GetReceivedByAddress(null))->jsonSerialize());
    }

    public function test_serialize_with_params_constructs_expected_object()
    {
        $expected = (object) [
            'jsonrpc' => '1.0',
            'id'      => 'curl',
            'method'  => 'getreceivedbyaddress',
            'params' => ['myparam1', 19, true]
        ];

        $this->assertEquals($expected, (new GetReceivedByAddress(['myparam1', 19, true]))->jsonSerialize());
    }
}
