<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Service;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationException;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceException;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\InRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator\ErrorHandlerDecorator;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\SoapServiceFactory;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation\CommunicationExpectation;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation\ResponseRecordExpectation;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Provider\GetRecordsTestProvider;
use PostDirekt\Sdk\AddressfactoryDirect\Test\SoapClientTestCase;
use Psr\Log\Test\TestLogger;

class GetRecordsTest extends SoapClientTestCase
{
    /**
     * @return mixed[]
     */
    public function addressDataProvider(): array
    {
        return GetRecordsTestProvider::processAddressSuccess();
    }

    /**
     * @return mixed[]
     */
    public function packstationDataProvider(): array
    {
        return GetRecordsTestProvider::processPackstationSuccess();
    }

    /**
     * @return string[][]
     */
    public function authFailureDataProvider(): array
    {
        return GetRecordsTestProvider::authenticationFailed();
    }

    /**
     * @return mixed[]
     */
    public function serverErrorDataProvider(): array
    {
        return GetRecordsTestProvider::serverError();
    }

    /**
     * Scenario: Request a data set using the `getRecords` service call.
     *
     * Assert that
     * - instances of RecordInterface are returned
     * - communication gets logged
     * - some important response properties are set
     *
     * @test
     * @dataProvider addressDataProvider
     *
     * @param string|null $sessionId
     * @param string|null $configName
     * @param string|null $clientId
     * @param InRecordWSType[] $inRecords
     * @param string $responseXml
     * @throws ServiceException
     */
    public function getAddressRecordsSuccess(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        string $responseXml
    ): void {
        $recordIds = array_map(
            function (InRecordWSType $inRecord) {
                return $inRecord->getRecordId();
            },
            $inRecords
        );

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger);
        $records = $service->getRecords($inRecords, $sessionId, $configName, $clientId);

        self::assertIsArray($records);
        self::assertNotEmpty($records);
        self::assertContainsOnlyInstancesOf(RecordInterface::class, $records);
        self::assertCount(count($inRecords), $records);

        foreach ($records as $record) {
            self::assertContains($record->getRecordId(), $recordIds);
            self::assertIsArray($record->getStatusCodes());
            self::assertContainsOnly('string', $record->getStatusCodes());

            ResponseRecordExpectation::assertDataPresent($record, $responseXml);
        }

        // Assert communication gets logged.
        CommunicationExpectation::assertCommunicationLogged(
            $soapClient->__getLastRequest(),
            $soapClient->__getLastResponse(),
            $logger
        );
    }
    /**
     * Scenario: Request a data set using the `getRecords` service call.
     *
     * Assert that
     * - instances of RecordInterface are returned
     * - communication gets logged
     * - some important response properties are set
     *
     * @test
     * @dataProvider packstationDataProvider
     *
     * @param string|null $sessionId
     * @param string|null $configName
     * @param string|null $clientId
     * @param InRecordWSType[] $inRecords
     * @param string $responseXml
     * @throws ServiceException
     */
    public function getPackstationRecordsSuccess(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        string $responseXml
    ): void {
        $recordIds = array_map(
            function (InRecordWSType $inRecord) {
                return $inRecord->getRecordId();
            },
            $inRecords
        );

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger);
        $records = $service->getRecords($inRecords, $sessionId, $configName, $clientId);

        self::assertIsArray($records);
        self::assertNotEmpty($records);
        self::assertContainsOnlyInstancesOf(RecordInterface::class, $records);
        self::assertCount(count($inRecords), $records);

        foreach ($records as $record) {
            self::assertContains($record->getRecordId(), $recordIds);
            self::assertIsArray($record->getStatusCodes());
            self::assertContainsOnly('string', $record->getStatusCodes());

            ResponseRecordExpectation::assertDataPresent($record, $responseXml);
        }

        // Assert communication gets logged.
        CommunicationExpectation::assertCommunicationLogged(
            $soapClient->__getLastRequest(),
            $soapClient->__getLastResponse(),
            $logger
        );
    }

    /**
     * Scenario: Request a data set with wrong credentials
     *
     * Assert that
     * - communication gets logged
     * - an authentication exception is thrown
     *
     * @test
     * @dataProvider authFailureDataProvider
     *
     * @param string|null $sessionId
     * @param string|null $configName
     * @param string|null $clientId
     * @param InRecordWSType[] $inRecords
     * @param string $responseXml
     * @throws ServiceException
     */
    public function getRecordsAuthError(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        string $responseXml
    ): void {
        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage(ErrorHandlerDecorator::AUTH_ERROR_MESSAGE);

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);

        $serviceFactory = new SoapServiceFactory($soapClient);

        try {
            $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger);
            $service->getRecords($inRecords, $sessionId, $configName, $clientId);
        } catch (ServiceException $exception) {
            // assert error response handling
            CommunicationExpectation::assertErrorsLogged(
                $soapClient->__getLastRequest(),
                $soapClient->__getLastResponse(),
                $logger
            );

            throw $exception;
        }
    }

    /**
     * Scenario: Request fails due to some invalid request data.
     *
     * Note that the complete request will be rejected, even if only a subset of records is invalid.
     *
     * Assert that
     * - only instances of ServiceException get thrown
     * - communication gets logged
     *
     * @test
     * @dataProvider serverErrorDataProvider
     *
     * @param string|null $sessionId
     * @param string|null $configName
     * @param string|null $clientId
     * @param InRecordWSType[] $inRecords
     * @param \SoapFault $soapFault
     * @throws ServiceException
     */
    public function getRecordsServerError(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        \SoapFault $soapFault
    ): void {
        $this->expectException(ServiceException::class);
        $this->expectExceptionMessage($soapFault->faultstring);

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock('');

        $soapClient->expects(self::once())
                   ->method('__doRequest')
                   ->willThrowException($soapFault);

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger);

        try {
            $service->getRecords($inRecords, $sessionId, $configName, $clientId);
        } catch (ServiceException $exception) {
            // Assert communication gets logged.
            CommunicationExpectation::assertErrorsLogged(
                $soapClient->__getLastRequest(),
                $soapFault->getMessage(),
                $logger
            );

            throw $exception;
        }
    }
}
