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
    const FAULT_UNAUTHORIZED = 'Unauthorized';

    public function openSession(OpenSessionRequest $request): OpenSessionResponse
    {
        try {
            /** @var OpenSessionResponse $response */
            $response = parent::openSession($request);
        } catch (\SoapFault $fault) {
            if ($fault->faultstring === self::FAULT_UNAUTHORIZED) {
                throw new AuthenticationErrorException(self::AUTH_ERROR_MESSAGE, 401, $fault);
            }

            throw $fault;
        }

        return $response;
    }

    public function closeSession(CloseSessionRequest $request): CloseSessionResponse
    {
        try {
            /** @var CloseSessionResponse $response */
            $response = parent::closeSession($request);
        } catch (\SoapFault $fault) {
            if ($fault->faultstring === self::FAULT_UNAUTHORIZED) {
                throw new AuthenticationErrorException(self::AUTH_ERROR_MESSAGE, 401, $fault);
            }

            throw $fault;
        }

        return $response;
    }

    public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse
    {
        try {
            /** @var ProcessSimpleDataResponse $response */
            $response = parent::processSimpleData($request);
        } catch (\SoapFault $fault) {
            if ($fault->faultstring === self::FAULT_UNAUTHORIZED) {
                throw new AuthenticationErrorException(self::AUTH_ERROR_MESSAGE, 401, $fault);
            }

            throw $fault;
        }

        return $response;
    }

    public function processData(ProcessDataRequest $request): ProcessDataResponse
    {
        try {
            /** @var ProcessDataResponse $response */
            $response = parent::processData($request);
        } catch (\SoapFault $fault) {
            if ($fault->faultstring === self::FAULT_UNAUTHORIZED) {
                throw new AuthenticationErrorException(self::AUTH_ERROR_MESSAGE, 401, $fault);
            }

            throw $fault;
        }

        return $response;
    }
}
