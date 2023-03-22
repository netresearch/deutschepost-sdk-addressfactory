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

/**
 * Class Client
 *
 * Wrapper around actual soap client to perform the following tasks:
 * - add authentication
 * - transform errors into exceptions
 * - log communication
 */
class Client extends AbstractClient
{
    public function __construct(private readonly \SoapClient $soapClient)
    {
    }

    public function openSession(OpenSessionRequest $request): OpenSessionResponse
    {
        return $this->soapClient->__soapCall(__FUNCTION__, [ $request ]);
    }

    public function closeSession(CloseSessionRequest $request): CloseSessionResponse
    {
        return $this->soapClient->__soapCall(__FUNCTION__, [ $request ]);
    }

    public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse
    {
        return $this->soapClient->__soapCall(__FUNCTION__, [ $request ]);
    }

    public function processData(ProcessDataRequest $request): ProcessDataResponse
    {
        return $this->soapClient->__soapCall(__FUNCTION__, [ $request ]);
    }
}
