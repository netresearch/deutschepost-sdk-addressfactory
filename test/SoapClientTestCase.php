<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use PostDirekt\Sdk\AddressfactoryDirect\Serializer\ClassMap;
use PostDirekt\Sdk\AddressfactoryDirect\Test\TestDouble\SoapClientFake;

/**
 * Class SoapClientTestCase
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class SoapClientTestCase extends TestCase
{
    /**
     * @param string $responseXml
     *
     * @return \SoapClient|MockObject
     */
    protected function getSoapClientMock(string $responseXml)
    {
        $wsdl = __DIR__ . '/Provider/_files/AF-Direct-Service/AF-Direct.wsdl';
        $clientOptions = [
            'trace'        => true,
            'soap_version' => SOAP_1_1,
            'features'     => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap'     => ClassMap::get(),
        ];

        /** @var \SoapClient|MockObject $soapClient */
        $soapClient = $this->getMockFromWsdl(
            $wsdl,
            SoapClientFake::class,
            '',
            [
                '__doRequest',
            ],
            true,
            $clientOptions
        );

        $soapClient->expects(self::once())
            ->method('__doRequest')
            ->willReturn($responseXml);

        return $soapClient;
    }
}
