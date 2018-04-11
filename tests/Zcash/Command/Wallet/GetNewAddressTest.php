<?php

namespace ZenCash\PaymentGateway\Zcash\Command\Wallet;

use PHPUnit\Framework\TestCase;

class GetNewAddressTest extends TestCase
{
    public function test_serialize_without_params_constructs_expected_object()
    {
        $expected = (object) [
            'jsonrpc' => '1.0',
            'id'      => 'curl',
            'method'  => 'getnewaddress',
        ];

        $this->assertEquals($expected, (new GetNewAddress(null))->jsonSerialize());
    }

    public function test_serialize_with_params_constructs_expected_object()
    {
        $expected = (object) [
            'jsonrpc' => '1.0',
            'id'      => 'curl',
            'method'  => 'getnewaddress',
            'params' => ['myparam1', 19, true]
        ];

        $this->assertEquals($expected, (new GetNewAddress(['myparam1', 19, true]))->jsonSerialize());
    }
}
