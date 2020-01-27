<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service;

use PostDirekt\Sdk\AddressfactoryDirect\Api\AddressFactoryServiceInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationErrorException;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\DetailedErrorException;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceExceptionFactory;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\InRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\SimpleInRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService\Record;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\AbstractClient;

/**
 * AddressFactoryService
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class AddressFactoryService implements AddressFactoryServiceInterface
{
    /**
     * @var AbstractClient
     */
    private $client;

    /**
     * AddressFactoryService constructor.
     *
     * @param AbstractClient $client
     */
    public function __construct(AbstractClient $client)
    {
        $this->client = $client;
    }

    public function openSession(string $configName = null, string $clientId = null): string
    {
        $request = new OpenSessionRequest();
        $request->setConfigName($configName);
        $request->setMandantId($clientId);

        try {
            $response = $this->client->openSession($request);
            return $response->getSessionId();
        } catch (AuthenticationErrorException $exception) {
            throw ServiceExceptionFactory::createAuthenticationException($exception);
        } catch (DetailedErrorException $exception) {
            throw ServiceExceptionFactory::createDetailedServiceException($exception);
        } catch (\Throwable $exception) {
            // Catch all leftovers, e.g. \SoapFault, \Exception, ...
            throw ServiceExceptionFactory::createServiceException($exception);
        }
    }

    public function closeSession(string $sessionId = null)
    {
        $request = new CloseSessionRequest();
        $request->setSessionId($sessionId);

        try {
            $this->client->closeSession($request);
        } catch (AuthenticationErrorException $exception) {
            throw ServiceExceptionFactory::createAuthenticationException($exception);
        } catch (DetailedErrorException $exception) {
            throw ServiceExceptionFactory::createDetailedServiceException($exception);
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
    ) {
        $address = new SimpleInRecordWSType(time());
        $address->setPlz($postalCode);
        $address->setOrt($city);
        $address->setStrasse($street);
        $address->setHausnummer($houseNumber);
        $address->setName($lastName);
        $address->setVorname($firstName);

        $requestType = new ProcessSimpleDataRequest();
        $requestType->setSessionId($sessionId);
        $requestType->setConfigName($configName);
        $requestType->setMandantId($clientId);

        $requestType->setSimpleInRecord($address);

        try {
            $response = $this->client->processSimpleData($requestType);

            // TODO Add response mapper
            return new Record();
        } catch (AuthenticationErrorException $exception) {
            throw ServiceExceptionFactory::createAuthenticationException($exception);
        } catch (DetailedErrorException $exception) {
            throw ServiceExceptionFactory::createDetailedServiceException($exception);
        } catch (\Throwable $exception) {
            // Catch all leftovers, e.g. \SoapFault, \Exception, ...
            throw ServiceExceptionFactory::createServiceException($exception);
        }
    }

    public function getRecord(
        $record,
        string $sessionId = null,
        string $configName = null,
        string $clientId = null
    ) {
        try {
            $requestType = new ProcessDataRequest();
            $requestType->setSessionId($sessionId);
            $requestType->setConfigName($configName);
            $requestType->setMandantId($clientId);

            /** @var InRecordWSType $record */
            $requestType->setInRecord($record);

            $response = $this->client->processData($requestType);

            // TODO Add response mapper
            return new Record();
        } catch (AuthenticationErrorException $exception) {
            throw ServiceExceptionFactory::createAuthenticationException($exception);
        } catch (DetailedErrorException $exception) {
            throw ServiceExceptionFactory::createDetailedServiceException($exception);
        } catch (\Throwable $exception) {
            // Catch all leftovers, e.g. \SoapFault, \Exception, ...
            throw ServiceExceptionFactory::createServiceException($exception);
        }
    }
}
