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
    public static function addressDataProvider(): array
    {
        return GetRecordsTestProvider::processAddressSuccess();
    }

    /**
     * @return mixed[]
     */
    public static function packstationDataProvider(): array
    {
        return GetRecordsTestProvider::processPackstationSuccess();
    }

    public static function postfilialeDataProvider(): array
    {
        return GetRecordsTestProvider::processPostfilialeSuccess();
    }

    public static function postfachDataProvider(): array
    {
        return GetRecordsTestProvider::processPostfachSuccess();
    }

    public static function geDataProvider(): array
    {
        return GetRecordsTestProvider::processGeSuccess();
    }

    /**
     * @return string[][]
     */
    public static function authFailureDataProvider(): array
    {
        return GetRecordsTestProvider::authenticationFailed();
    }

    /**
     * @return mixed[]
     */
    public static function serverErrorDataProvider(): array
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
     *
     * @param InRecordWSType[] $inRecords
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('addressDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function getAddressRecordsSuccess(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        string $responseXml
    ): void {
        $recordIds = array_map(
            fn(InRecordWSType $inRecord): int => $inRecord->getRecordId(),
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
     *
     * @param InRecordWSType[] $inRecords
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('packstationDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function getPackstationRecordsSuccess(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        string $responseXml
    ): void {
        $recordIds = array_map(
            fn(InRecordWSType $inRecord): int => $inRecord->getRecordId(),
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
     * @throws AuthenticationException
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('postfilialeDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function getPostfilialeRecordsSuccess(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        string $responseXml
    ): void {
        $recordIds = array_map(
            fn(InRecordWSType $inRecord): int => $inRecord->getRecordId(),
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
     * @throws AuthenticationException
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('postfachDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function getPostfachRecordsSuccess(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        string $responseXml
    ): void {
        $recordIds = array_map(
            fn(InRecordWSType $inRecord): int => $inRecord->getRecordId(),
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
     * @throws AuthenticationException
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('geDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function getGeRecordsSuccess(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        array $inRecords,
        string $responseXml
    ): void {
        $recordIds = array_map(
            fn(InRecordWSType $inRecord): int => $inRecord->getRecordId(),
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
     *
     * @param InRecordWSType[] $inRecords
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('authFailureDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
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
     *
     * @param InRecordWSType[] $inRecords
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('serverErrorDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
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
