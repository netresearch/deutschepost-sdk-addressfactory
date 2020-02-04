<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Soap;

use PostDirekt\Sdk\AddressfactoryDirect\Api\AddressVerificationServiceInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\ServiceFactoryInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Mapper\RecordResponseMapper;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator\AuthenticationDecorator;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator\ErrorHandlerDecorator;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator\LoggerDecorator;
use Psr\Log\LoggerInterface;

/**
 * Class SoapServiceFactory
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class SoapServiceFactory implements ServiceFactoryInterface
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * SoapServiceFactory constructor.
     *
     * @param \SoapClient $soapClient
     */
    public function __construct(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    public function createAddressFactoryService(
        string $username,
        string $password,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): AddressVerificationServiceInterface {
        $pluginClient = new Client($this->soapClient);
        $pluginClient = new ErrorHandlerDecorator($pluginClient);
        $pluginClient = new LoggerDecorator($pluginClient, $this->soapClient, $logger);
        $pluginClient = new AuthenticationDecorator($pluginClient, $this->soapClient, $username, $password);

        $responseMapper = new RecordResponseMapper();

        return new AddressVerificationService(
            $pluginClient,
            $responseMapper
        );
    }
}
