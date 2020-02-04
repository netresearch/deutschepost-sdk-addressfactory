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
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class ErrorHandlerDecorator extends AbstractDecorator
{
    const AUTH_ERROR_MESSAGE = 'Authentication failed. Please check your access credentials.';

    const FAULT_AUTH_FAILED  = 'Failed Authentication';
    const FAULT_UNAUTHORIZED = 'Unauthorized';

    /**
     * Executes the passed webservice requests and processes any occurring \SoapFault.
     *
     * @param \Closure $request
     *
     * @return mixed
     *
     * @throws AuthenticationErrorException
     * @throws \SoapFault
     */
    private function execute(\Closure $request)
    {
        try {
            $response = $request();
        } catch (\SoapFault $fault) {
            if (
                ($fault->faultstring === self::FAULT_UNAUTHORIZED)
                || (strpos($fault->faultstring, self::FAULT_AUTH_FAILED) !== false)
            ) {
                throw new AuthenticationErrorException(self::AUTH_ERROR_MESSAGE, 401, $fault);
            }

            throw $fault;
        }

        return $response;
    }

    public function openSession(OpenSessionRequest $request): OpenSessionResponse
    {
        return $this->execute(function () use ($request) {
            return parent::openSession($request);
        });
    }

    public function closeSession(CloseSessionRequest $request): CloseSessionResponse
    {
        return $this->execute(function () use ($request) {
            return parent::closeSession($request);
        });
    }

    public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse
    {
        return $this->execute(function () use ($request) {
            return parent::processSimpleData($request);
        });
    }

    public function processData(ProcessDataRequest $request): ProcessDataResponse
    {
        return $this->execute(function () use ($request) {
            return parent::processData($request);
        });
    }
}
