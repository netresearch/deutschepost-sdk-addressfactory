<?php

/**
 * See LICENSE.md for license details.
 */

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\TestDouble;

/**
 * Fake SOAP client used in tests.
 */
class SoapClientFake extends \SoapClient
{
    /**
     * SoapClientFake constructor.
     *
     * PHPUnit does not pass through the wsdl to the client constructor, need to add it by overriding original one.
     *
     * @param mixed $wsdl
     * @param mixed[]|null $options
     *
     * @throws \SoapFault
     */
    public function __construct($wsdl, array $options = null)
    {
        $wsdl = __DIR__ . '/../Provider/_files/AF-Direct-Service/AF-Direct.wsdl';

        parent::__construct($wsdl, $options);
    }
}
