<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Soap;

use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataResponse;

abstract class AbstractDecorator extends AbstractClient
{
    public function __construct(private readonly AbstractClient $client)
    {
    }

    public function openSession(OpenSessionRequest $request): OpenSessionResponse
    {
        return $this->client->openSession($request);
    }

    public function closeSession(CloseSessionRequest $request): CloseSessionResponse
    {
        return $this->client->closeSession($request);
    }

    public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse
    {
        return $this->client->processSimpleData($request);
    }

    public function processData(ProcessDataRequest $request): ProcessDataResponse
    {
        return $this->client->processData($request);
    }
}
