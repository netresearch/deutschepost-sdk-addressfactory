<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator;

use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationErrorException;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\DetailedErrorException;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\AbstractClient;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\AbstractDecorator;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * LoggerDecorator
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class LoggerDecorator extends AbstractDecorator
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * LoggerDecorator constructor.
     *
     * @param AbstractClient $client
     * @param \SoapClient $soapClient
     * @param LoggerInterface $logger
     */
    public function __construct(
        AbstractClient $client,
        \SoapClient $soapClient,
        LoggerInterface $logger
    ) {
        $this->soapClient = $soapClient;
        $this->logger = $logger;

        parent::__construct($client);
    }

    /**
     * Log entire webservice requests and responses.
     *
     * @param \Closure $performRequest
     *
     * @return OpenSessionResponse|CloseSessionResponse|ProcessDataResponse|ProcessSimpleDataResponse
     *
     * @throws AuthenticationErrorException
     * @throws DetailedErrorException
     * @throws \SoapFault
     */
    private function logCommunication(\Closure $performRequest)
    {
        try {
            /** @var OpenSessionResponse|CloseSessionResponse|ProcessDataResponse|ProcessSimpleDataResponse $response */
            $response = $performRequest();

//            // adjust log level on successful responses
//            if ($response->getStatus()->getStatusCode() === 2000) {
//                // unknown shipment number errors contained in response.
//                $logLevel = LogLevel::ERROR;
//            } elseif ($response->getStatus()->getStatusText() === 'Some Shipments had errors.') {
//                // hard validation errors contained in response.
//                $logLevel = LogLevel::ERROR;
//            } elseif ($response->getStatus()->getStatusText() === 'Weak validation error occured.') {
//                // weak validation errors contained in response.
//                $logLevel = LogLevel::WARNING;
//            } else {
                $logLevel = LogLevel::INFO;
//            }

            return $response;
        } catch (AuthenticationErrorException $fault) {
            $logLevel = LogLevel::ERROR;

            throw $fault;
        } catch (DetailedErrorException $fault) {
            $logLevel = LogLevel::ERROR;

            throw $fault;
        } catch (\SoapFault $fault) {
            $logLevel = LogLevel::ERROR;

            throw $fault;
        } finally {
            $lastRequest = sprintf(
                "%s\n%s",
                $this->soapClient->__getLastRequestHeaders(),
                $this->soapClient->__getLastRequest()
            );

            $lastResponse = sprintf(
                "%s\n%s",
                $this->soapClient->__getLastResponseHeaders(),
                $this->soapClient->__getLastResponse()
            );

//ini_set('xdebug.var_display_max_depth', '-1');
//ini_set('xdebug.var_display_max_children', '-1');
//ini_set('xdebug.var_display_max_data', '-1');
//var_dump($lastRequest, $lastResponse);

            $this->logger->log($logLevel, $lastRequest);
            $this->logger->log($logLevel, $lastResponse);

            if (isset($fault)) {
                $this->logger->log($logLevel, $fault->getMessage());
            }
        }
    }

    public function openSession(OpenSessionRequest $request): OpenSessionResponse
    {
        $performRequest = function () use ($request) {
            return parent::openSession($request);
        };

        /** @var OpenSessionResponse $response */
        $response = $this->logCommunication($performRequest);
        return $response;
    }

    public function closeSession(CloseSessionRequest $request): CloseSessionResponse
    {
        $performRequest = function () use ($request) {
            return parent::closeSession($request);
        };

        /** @var CloseSessionResponse $response */
        $response = $this->logCommunication($performRequest);
        return $response;
    }

    public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse
    {
        $performRequest = function () use ($request) {
            return parent::processSimpleData($request);
        };

        /** @var ProcessSimpleDataResponse $response */
        $response = $this->logCommunication($performRequest);
        return $response;
    }

    public function processData(ProcessDataRequest $request): ProcessDataResponse
    {
        $performRequest = function () use ($request) {
            return parent::processData($request);
        };

        /** @var ProcessDataResponse $response */
        $response = $this->logCommunication($performRequest);
        return $response;
    }
}
