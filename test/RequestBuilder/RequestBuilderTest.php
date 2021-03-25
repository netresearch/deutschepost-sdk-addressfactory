<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Service;

use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceException;
use PostDirekt\Sdk\AddressfactoryDirect\RequestBuilder\RequestBuilder;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\SoapServiceFactory;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation\RequestBuilderExpectation;
use PostDirekt\Sdk\AddressfactoryDirect\Test\RequestBuilder\RequestFactory;
use PostDirekt\Sdk\AddressfactoryDirect\Test\SoapClientTestCase;
use PostDirekt\Sdk\AddressfactoryDirect\Test\TestDouble\RecordStub;
use Psr\Log\Test\TestLogger;

/**
 * Class RequestBuilderTest
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class RequestBuilderTest extends SoapClientTestCase
{
    /**
     * @return mixed[]
     */
    public function dataProvider(): array
    {
        return [
            'full_request' => [
                [new RecordStub()]],
        ];
    }


    /**
     * Scenario: Request data are built using the public api request builder.
     *
     * Assert that all properties set through the builder are included in the request xml.
     *
     * @test
     * @dataProvider dataProvider
     *
     * @param RecordStub[] $requestData
     * @throws ServiceException
     */
    public function createRequest(array $requestData): void
    {
        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock('');
        $soapClient->expects(self::once())
                   ->method('__doRequest')
                   ->willThrowException(new \SoapFault('soap:Server', 'Internal Server Error'));

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger);

        $requestBuilder = new RequestBuilder();
        $requestFactory = new RequestFactory($requestBuilder);

        $sessionId = '8#324kj';
        $configName = 'default123';
        $clientId = 'it\'s-a-me!';

        $inRecordTypes = [];
        foreach ($requestData as $data) {
            $inRecordTypes[$data->getRecordId()] = $requestFactory->create($data);
        }

        try {
            $service->getRecords(array_values($inRecordTypes), $sessionId, $configName, $clientId);
        } catch (ServiceException $exception) {
            // ignore, we are just interested in the request
        }

        $requestXml = $soapClient->__getLastRequest();

        RequestBuilderExpectation::assertMetaPresent($requestXml, $sessionId, $configName, $clientId);
        foreach ($requestData as $data) {
            RequestBuilderExpectation::assertDataPresent($requestXml, $data, $inRecordTypes[$data->getRecordId()]);
        }
    }
}
