<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Soap;

use PostDirekt\Sdk\AddressfactoryDirect\Api\AddressFactoryServiceInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\ServiceFactoryInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService;
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
    ): AddressFactoryServiceInterface {
//        $responseMapper = new RecordResponseMapper();

        $pluginClient = new Client($this->soapClient);
        $pluginClient = new ErrorHandlerDecorator($pluginClient);
        $pluginClient = new LoggerDecorator($pluginClient, $this->soapClient, $logger);
        $pluginClient = new AuthenticationDecorator($pluginClient, $this->soapClient, $username, $password);

        return new AddressFactoryService(
            $pluginClient//,
            // $responseMapper,
        );
    }
}
