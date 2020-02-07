<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Service;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationException;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceException;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator\ErrorHandlerDecorator;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\SoapServiceFactory;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation\CommunicationExpectation;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation\ResponseRecordExpectation;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Provider\FailureTestProvider;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Provider\GetRecordTestProvider;
use PostDirekt\Sdk\AddressfactoryDirect\Test\SoapClientTestCase;
use Psr\Log\Test\TestLogger;

/**
 * Class GetRecordTest
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetRecordTest extends SoapClientTestCase
{
    /**
     * @return mixed[]
     */
    public function dataProvider(): array
    {
        return GetRecordTestProvider::processSimpleDataSuccess();
    }

    /**
     * @return string[][]
     */
    public function authFailureDataProvider(): array
    {
        return FailureTestProvider::authenticationFailed();
    }

    /**
     * @return string[][]
     */
    public function serverErrorDataProvider(): array
    {
        return FailureTestProvider::serverError();
    }

    /**
     * Scenario: Request a data set using the `getRecordByAddress` service call.
     *
     * Assert that
     * - an instance of RecordInterface is returned
     * - different combinations of session id/config name/client id are processed properly
     * - communication gets logged
     *
     * @test
     * @dataProvider dataProvider
     *
     * @param string|null $sessionId
     * @param string|null $configName
     * @param string|null $clientId
     * @param string $responseXml
     * @throws ServiceException
     */
    public function getRecordSuccess(
        ?string $sessionId,
        ?string $configName,
        ?string $clientId,
        string $responseXml
    ): void {
        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger);
        $record = $service->getRecordByAddress(
            '53112',
            'Bonn',
            'Strässchensweg',
            '10',
            'Hans',
            'Mustermann',
            $sessionId,
            $configName,
            $clientId
        );

        self::assertInstanceOf(RecordInterface::class, $record);

        $requestXml = $soapClient->__getLastRequest();
        self::assertContains((string) $sessionId, $requestXml);
        self::assertContains((string) $configName, $requestXml);
        self::assertContains((string) $clientId, $requestXml);

        ResponseRecordExpectation::assertDataPresent($record, $responseXml);

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
     * @param string $responseXml
     * @throws ServiceException
     */
    public function getRecordAuthError(string $responseXml): void
    {
        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage(ErrorHandlerDecorator::AUTH_ERROR_MESSAGE);

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);
        $serviceFactory = new SoapServiceFactory($soapClient);

        try {
            $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger, true);
            $service->getRecordByAddress('53112', 'Bonn', 'Strässchensweg', '10');
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
     * Scenario: Open a session with invalid request xml
     *
     * Assert that
     * - communication gets logged
     * - a service exception is thrown
     *
     * @test
     * @dataProvider serverErrorDataProvider
     *
     * @param string $responseXml
     * @throws ServiceException
     */
    public function getRecordServerError($responseXml): void
    {
        $this->expectException(ServiceException::class);
        $this->expectExceptionMessage('Internal Server Error');

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);
        $serviceFactory = new SoapServiceFactory($soapClient);

        try {
            $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger, true);
            $service->getRecordByAddress('53112', 'Bonn', 'Strässchensweg', '10');
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
}
