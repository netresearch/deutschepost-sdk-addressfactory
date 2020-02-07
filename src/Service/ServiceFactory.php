<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service;

use PostDirekt\Sdk\AddressfactoryDirect\Api\AddressVerificationServiceInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\ServiceFactoryInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceExceptionFactory;
use PostDirekt\Sdk\AddressfactoryDirect\Serializer\ClassMap;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\SoapServiceFactory;
use Psr\Log\LoggerInterface;

/**
 * Class ServiceFactory
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class ServiceFactory implements ServiceFactoryInterface
{
    public function createAddressVerificationService(
        string $username,
        string $password,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): AddressVerificationServiceInterface {
        $wsdl = $sandboxMode
            ? 'https://service-afdirect.postdirekt.de/sapouni/AF-Direct-TestServer/AF-Direct?wsdl'
            : 'https://service-afdirect.postdirekt.de/sapouni/AF-Direct-Service/AF-Direct?wsdl';

        $options = [
            'trace'        => true, // Enable to log requests
            'exceptions'   => true,
            'features'     => SOAP_SINGLE_ELEMENT_ARRAYS,
            'soap_version' => SOAP_1_1,
            'classmap'     => ClassMap::get(),
            'login'        => $username,
            'password'     => $password,
        ];

        try {
            $soapClient = new \SoapClient($wsdl, $options);
        } catch (\SoapFault $soapFault) {
            throw ServiceExceptionFactory::createServiceException($soapFault);
        }

        $soapServiceFactory = new SoapServiceFactory($soapClient);
        return $soapServiceFactory->createAddressVerificationService($username, $password, $logger, $sandboxMode);
    }
}
