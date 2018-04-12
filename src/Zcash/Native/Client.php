<?php

namespace ZenCash\PaymentGateway\Zcash\Native;

use GuzzleHttp\ClientInterface as IHttpClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException as IException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;
use ZenCash\PaymentGateway\Zcash\Client as IClient;
use ZenCash\PaymentGateway\Zcash\Command;
use ZenCash\PaymentGateway\Zcash\Rpc;

final class Client implements IClient
{
    private $rpc;
    private $httpClient;

    public function __construct(Rpc $rpc, IHttpClient $httpClient)
    {
        $this->rpc = $rpc;
        $this->httpClient = $httpClient;
    }

    /** @throws IException|ServerException|ClientException */
    public function execute(Command $command): ResponseInterface
    {
        return $this->httpClient->request('POST', $this->rpc->getAddress(), [
            'auth' => [$this->rpc->getUser(), $this->rpc->getPassword()],
            'json' => $command
        ]);
    }
}
