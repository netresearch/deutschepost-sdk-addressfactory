<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator;

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

class AuthenticationDecorator extends AbstractDecorator
{
    final public const WSSE_NS = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
    final public const WSSE_PASSWORD_TYPE = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText';

    public function __construct(
        AbstractClient $client,
        private readonly \SoapClient $soapClient,
        private readonly string $username,
        private readonly string $password
    ) {
        parent::__construct($client);
    }

    /**
     * Add security header to the SOAP client.
     *
     * Uses plain XML to create the header node, instead of the PHP SOAP classes
     * as it is not possible to add attributes to a SoapVar (the "Type" attribute
     * of the password node).
     */
    private function addAuthHeader(): void
    {
        $xml = <<<XML
<wsse:Security xmlns:wsse="%s" SOAP-ENV:mustUnderstand="1">
    <wsse:UsernameToken>
        <wsse:Username>%s</wsse:Username>
        <wsse:Password Type="%s">%s</wsse:Password>
    </wsse:UsernameToken>
</wsse:Security>
XML;

        $authHeader = new \SoapHeader(
            self::WSSE_NS,
            'wsse',
            new \SoapVar(
                sprintf($xml, self::WSSE_NS, $this->username, self::WSSE_PASSWORD_TYPE, htmlentities($this->password)),
                XSD_ANYXML
            )
        );

        $this->soapClient->__setSoapHeaders([ $authHeader ]);
    }

    public function openSession(OpenSessionRequest $request): OpenSessionResponse
    {
        $this->addAuthHeader();
        return parent::openSession($request);
    }

    public function closeSession(CloseSessionRequest $request): CloseSessionResponse
    {
        $this->addAuthHeader();
        return parent::closeSession($request);
    }

    public function processSimpleData(ProcessSimpleDataRequest $request): ProcessSimpleDataResponse
    {
        $this->addAuthHeader();
        return parent::processSimpleData($request);
    }

    public function processData(ProcessDataRequest $request): ProcessDataResponse
    {
        $this->addAuthHeader();
        return parent::processData($request);
    }
}
