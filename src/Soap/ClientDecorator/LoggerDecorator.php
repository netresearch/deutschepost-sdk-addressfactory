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
     * @return mixed
     *
     * @throws AuthenticationErrorException
     * @throws \SoapFault
     */
    private function logCommunication(\Closure $performRequest)
    {
        $logLevel = LogLevel::INFO;

        try {
            return $performRequest();
        } catch (AuthenticationErrorException $fault) {
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

            $this->logger->log($logLevel, $lastRequest);
            $this->logger->log($logLevel, $lastResponse);

            if (isset($fault)) {
                $this->logger->log($logLevel, $fault->getMessage());
            }
        }
    }

    public function openSession(OpenSessionRequest $request): OpenSessionResponse
    {
        return $this->logCommunication(function () use ($request) {
            return parent::openSession($request);
        });
    }

    public function closeSession(CloseSessionRequest $request): CloseSessionResponse
    {
        return $this->logCommunication(function () use ($request) {
            return parent::closeSession($request);
        });
    }

    public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse
    {
        return $this->logCommunication(function () use ($request) {
            return parent::processSimpleData($request);
        });
    }

    public function processData(ProcessDataRequest $request): ProcessDataResponse
    {
        return $this->logCommunication(function () use ($request) {
            return parent::processData($request);
        });
    }
}
