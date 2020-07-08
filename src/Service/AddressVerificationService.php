<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service;

use PostDirekt\Sdk\AddressfactoryDirect\Api\AddressVerificationServiceInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationErrorException;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceExceptionFactory;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Mapper\RecordResponseMapper;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\SimpleInRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\AbstractClient;

class AddressVerificationService implements AddressVerificationServiceInterface
{
    /**
     * @var AbstractClient
     */
    private $client;

    /**
     * @var RecordResponseMapper
     */
    private $recordResponseMapper;

    /**
     * AddressFactoryService constructor.
     *
     * @param AbstractClient $client
     * @param RecordResponseMapper $recordResponseMapper
     */
    public function __construct(
        AbstractClient $client,
        RecordResponseMapper $recordResponseMapper
    ) {
        $this->client = $client;
        $this->recordResponseMapper = $recordResponseMapper;
    }

    public function openSession(string $configName, string $clientId = null): string
    {
        $request = new OpenSessionRequest();
        $request->setConfigName($configName);
        $request->setMandantId($clientId);

        try {
            $response = $this->client->openSession($request);
            return $response->getSessionId();
        } catch (AuthenticationErrorException $exception) {
            throw ServiceExceptionFactory::createAuthenticationException($exception);
        } catch (\Throwable $exception) {
            // Catch all leftovers, e.g. \SoapFault, \Exception, ...
            throw ServiceExceptionFactory::createServiceException($exception);
        }
    }

    public function closeSession(string $sessionId): void
    {
        $request = new CloseSessionRequest();
        $request->setSessionId($sessionId);

        try {
            $this->client->closeSession($request);
        } catch (AuthenticationErrorException $exception) {
            throw ServiceExceptionFactory::createAuthenticationException($exception);
        } catch (\Throwable $exception) {
            // Catch all leftovers, e.g. \SoapFault, \Exception, ...
            throw ServiceExceptionFactory::createServiceException($exception);
        }
    }

    public function getRecordByAddress(
        string $postalCode = '',
        string $city = '',
        string $street = '',
        string $houseNumber = '',
        string $lastName = '',
        string $firstName = '',
        string $sessionId = null,
        string $configName = null,
        string $clientId = null
    ): RecordInterface {
        $address = new SimpleInRecordWSType(time());
        $address->setPlz($postalCode)
            ->setOrt($city)
            ->setStrasse($street)
            ->setHausnummer($houseNumber)
            ->setName($lastName)
            ->setVorname($firstName);

        $requestType = new ProcessSimpleDataRequest();
        $requestType->setSessionId($sessionId);
        $requestType->setConfigName($configName);
        $requestType->setMandantId($clientId);
        $requestType->setSimpleInRecord($address);

        try {
            $response = $this->client->processSimpleData($requestType);
            return $this->recordResponseMapper->map($response->getOutRecord());
        } catch (AuthenticationErrorException $exception) {
            throw ServiceExceptionFactory::createAuthenticationException($exception);
        } catch (\Throwable $exception) {
            // Catch all leftovers, e.g. \SoapFault, \Exception, ...
            throw ServiceExceptionFactory::createServiceException($exception);
        }
    }

    public function getRecords(
        array $records,
        string $sessionId = null,
        string $configName = null,
        string $clientId = null
    ): array {
        $requestType = new ProcessDataRequest();
        $requestType->setSessionId($sessionId);
        $requestType->setConfigName($configName);
        $requestType->setMandantId($clientId);
        $requestType->setInRecord(array_filter($records));

        try {
            $response = $this->client->processData($requestType);
            return array_map(
                function (OutRecordWSType $outRecord) {
                    return $this->recordResponseMapper->map($outRecord);
                },
                $response->getOutRecord()
            );
        } catch (AuthenticationErrorException $exception) {
            throw ServiceExceptionFactory::createAuthenticationException($exception);
        } catch (\Throwable $exception) {
            // Catch all leftovers, e.g. \SoapFault, \Exception, ...
            throw ServiceExceptionFactory::createServiceException($exception);
        }
    }
}
