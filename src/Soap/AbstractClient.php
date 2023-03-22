<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Soap;

use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationErrorException;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataResponse;

abstract class AbstractClient
{
    /**
     * The "openSession" operation is used to generate a new session id
     * used within any subsequent webservice call.
     *
     * @throws AuthenticationErrorException
     * @throws \SoapFault
     */
    abstract public function openSession(OpenSessionRequest $request): OpenSessionResponse;

    /**
     * The operation "closeSession" closes a previously with "openSession"
     * created session instance.
     *
     * @throws AuthenticationErrorException
     * @throws \SoapFault
     */
    abstract public function closeSession(CloseSessionRequest $request): CloseSessionResponse;

    /**
     * The operation "processSimpleData" performs a simple address comparison.
     *
     * @throws AuthenticationErrorException
     * @throws \SoapFault
     */
    abstract public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse;

    /**
     * The operation "processData" performs a detailed address comparison.
     *
     * @throws AuthenticationErrorException
     * @throws \SoapFault
     */
    abstract public function processData(ProcessDataRequest $request): ProcessDataResponse;
}
