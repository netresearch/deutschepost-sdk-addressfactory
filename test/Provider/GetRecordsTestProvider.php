<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Provider;

use PostDirekt\Sdk\AddressfactoryDirect\RequestBuilder\RequestBuilder;

class GetRecordsTestProvider
{
    /**
     * Provide request and response for regular address validation.
     *
     * @return mixed[]
     */
    public static function processAddressSuccess(): array
    {
        $requestBuilder = new RequestBuilder();

        $requestBuilder->setMetadata(1580213265);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Sträßchenweg', '10');
        $recordRequest = $requestBuilder->create();
        $singleResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/addressResponse.xml');

        $recordRequests = [];

        $requestBuilder->setMetadata(1);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setAddress('Deutschland', '33739', 'Bielelfeld', 'Strusenweg', '36');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(2);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Sträßchenweg', '10');
        $recordRequests[] = $requestBuilder->create();

        $multiResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/addressMultiResponse.xml');

        return [
            'single_record' => ['session-id', 'config-name', 'client-id', [$recordRequest], $singleResponseXml],
            'multi_record' => ['session-id', 'config-name', 'client-id', $recordRequests, $multiResponseXml],
        ];
    }

    /**
     * Provide request and response for Packstation validation.
     *
     * @return mixed[]
     */
    public static function processPackstationSuccess(): array
    {
        $requestBuilder = new RequestBuilder();

        $requestBuilder->setMetadata(1580213265);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPackstation('150', '53114', 'Bonn');

        $recordRequest = $requestBuilder->create();
        $singleResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/packstationResponse.xml');

        $recordRequests = [];

        $requestBuilder->setMetadata(1);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPackstation('142', '04229', 'Leipzge');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(2);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPackstation('150', '53114', 'Bonn');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(3);
        $requestBuilder->setPerson('Hans', 'Mustermann', null, ['12345678']);
        $requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Packstation', '150');
        $recordRequests[] = $requestBuilder->create();

        $multiResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/packstationMultiResponse.xml');

        return [
            'single_record' => ['session-id', 'config-name', 'client-id', [$recordRequest], $singleResponseXml],
            'multi_record' => ['session-id', 'config-name', 'client-id', $recordRequests, $multiResponseXml],
        ];
    }

    /**
     * Provide request and response for Postoffice validation.
     *
     * @return mixed[]
     */
    public static function processPostfilialeSuccess(): array
    {
        $requestBuilder = new RequestBuilder();

        $requestBuilder->setMetadata(1580213265);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPostfiliale('540', '53113', 'Bonn');

        $recordRequest = $requestBuilder->create();
        $singleResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/postfilialeResponse.xml');

        $recordRequests = [];

        $requestBuilder->setMetadata(1);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPostfiliale('142', '04229', 'Leipzig');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(2);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPostfiliale('150', '53114', 'Bonn');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(3);
        $requestBuilder->setPerson('Hans', 'Mustermann', null, ['12345678']);
        $requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Postoffice', '150');
        $recordRequests[] = $requestBuilder->create();

        $multiResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/postfilialeMultiResponse.xml');

        return [
            'single_record' => ['session-id', 'config-name', 'client-id', [$recordRequest], $singleResponseXml],
            'multi_record' => ['session-id', 'config-name', 'client-id', $recordRequests, $multiResponseXml],
        ];
    }

    /**
     * Provide request and response for Postfach validation.
     *
     * @return mixed[]
     */
    public static function processPostfachSuccess(): array
    {
        $requestBuilder = new RequestBuilder();

        $requestBuilder->setMetadata(1580213265);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPostfach('540', '53113', 'Bonn');

        $recordRequest = $requestBuilder->create();
        $singleResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/postfachResponse.xml');

        $recordRequests = [];

        $requestBuilder->setMetadata(1);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPostfach('142', '04229', 'Leipzig');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(2);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setPostfach('150', '53114', 'Bonn');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(3);
        $requestBuilder->setPerson('Hans', 'Mustermann', null, ['12345678']);
        $requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Postfach', '150');
        $recordRequests[] = $requestBuilder->create();

        $multiResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/postfachMultiResponse.xml');

        return [
            'single_record' => ['session-id', 'config-name', 'client-id', [$recordRequest], $singleResponseXml],
            'multi_record' => ['session-id', 'config-name', 'client-id', $recordRequests, $multiResponseXml],
        ];
    }

    /**
     * Provide request and response for Grossempfänger(BulkReceiver) validation.
     *
     * @return mixed[]
     */
    public static function processGeSuccess(): array
    {
        $requestBuilder = new RequestBuilder();

        $requestBuilder->setMetadata(1580213265);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setCorporateAddress('Bulkstation', '53113', 'Bonn');

        $recordRequest = $requestBuilder->create();
        $singleResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/geResponse.xml');

        $recordRequests = [];

        $requestBuilder->setMetadata(1);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setCorporateAddress('Bulkstation', '04229', 'Leipzig');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(2);
        $requestBuilder->setPerson('Hans', 'Mustermann');
        $requestBuilder->setPersonPostNumber('12345678');
        $requestBuilder->setCorporateAddress('Bulkstation', '53114', 'Bonn');
        $recordRequests[] = $requestBuilder->create();

        $requestBuilder->setMetadata(3);
        $requestBuilder->setPerson('Hans', 'Mustermann', null, ['12345678']);
        $requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Bulkstation', '150');
        $recordRequests[] = $requestBuilder->create();

        $multiResponseXml = \file_get_contents(__DIR__ . '/_files/getRecords/geMultiResponse.xml');

        return [
            'single_record' => ['session-id', 'config-name', 'client-id', [$recordRequest], $singleResponseXml],
            'multi_record' => ['session-id', 'config-name', 'client-id', $recordRequests, $multiResponseXml],
        ];
    }

    public static function authenticationFailed(): array
    {
        $requestBuilder = new RequestBuilder();

        $requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Sträßchenweg', '10');
        $recordRequest = $requestBuilder->create();

        $responseXml = \file_get_contents(__DIR__ . '/_files/errors/invalidCredentialsResponse.xml');

        return [
            'authentication_failed' => ['session-id', 'config-name', 'client-id', [$recordRequest], $responseXml],
        ];
    }

    /**
     * Provide request and response for the test case.
     *
     * @return mixed[]
     */
    public static function serverError(): array
    {
        $requestBuilder = new RequestBuilder();

        $requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Sträßchenweg', '10');
        $recordRequest = $requestBuilder->create();

        $fault = new \SoapFault('soap:Server', 'Internal Server Error');

        return [
            'server_error' => ['session-id', 'config-name', 'client-id', [$recordRequest], $fault],
        ];
    }
}
