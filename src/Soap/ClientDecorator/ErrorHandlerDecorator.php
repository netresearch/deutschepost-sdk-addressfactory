<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator;

use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationErrorException;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\AbstractDecorator;

/**
 * ErrorHandlerDecorator
 *
 * Handle errors when a response was received, i.e. no soap fault occurred.
 */
class ErrorHandlerDecorator extends AbstractDecorator
{
    final public const AUTH_ERROR_MESSAGE = 'Authentication failed. Please check your access credentials.';

    final public const FAULT_AUTH_FAILED  = 'Failed Authentication';
    final public const FAULT_UNAUTHORIZED = 'Unauthorized';

    /**
     * Executes the passed webservice requests and processes any occurring \SoapFault.
     *
     * @throws AuthenticationErrorException
     * @throws \SoapFault
     */
    private function execute(
        \Closure $request
    ): mixed {
        try {
            $response = $request();
        } catch (\SoapFault $fault) {
            if (
                ($fault->faultstring === self::FAULT_UNAUTHORIZED)
                || (str_contains($fault->faultstring, self::FAULT_AUTH_FAILED))
            ) {
                throw new AuthenticationErrorException(self::AUTH_ERROR_MESSAGE, 401, $fault);
            }

            throw $fault;
        }

        return $response;
    }

    public function openSession(OpenSessionRequest $request): OpenSessionResponse
    {
        return $this->execute(fn() => parent::openSession($request));
    }

    public function closeSession(CloseSessionRequest $request): CloseSessionResponse
    {
        return $this->execute(fn() => parent::closeSession($request));
    }

    public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse
    {
        return $this->execute(fn() => parent::processSimpleData($request));
    }

    public function processData(ProcessDataRequest $request): ProcessDataResponse
    {
        return $this->execute(fn() => parent::processData($request));
    }
}
