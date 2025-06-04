<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Service;

use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationException;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceException;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\ClientDecorator\ErrorHandlerDecorator;
use PostDirekt\Sdk\AddressfactoryDirect\Soap\SoapServiceFactory;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation\CommunicationExpectation;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Provider\FailureTestProvider;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Provider\OpenSessionTestProvider;
use PostDirekt\Sdk\AddressfactoryDirect\Test\SoapClientTestCase;
use Psr\Log\Test\TestLogger;

class OpenSessionTest extends SoapClientTestCase
{
    /**
     * @return string[][]
     */
    public static function dataProvider(): array
    {
        return OpenSessionTestProvider::openSession();
    }

    /**
     * @return string[][]
     */
    public static function authFailureDataProvider(): array
    {
        return FailureTestProvider::authenticationFailed();
    }

    /**
     * @return string[][]
     */
    public static function serverErrorDataProvider(): array
    {
        return FailureTestProvider::serverError();
    }

    /**
     * Scenario: Open a session
     *
     * Opening a session requires a returns a session ID. It can fail if the
     * configuration name is missing/invalid (same response) or if
     * authentication fails (covered by a different test).
     *
     * Assert that
     * - communication gets logged
     * - a service exception is thrown in case of error
     * - a session id is returned in case of success
     *
     *
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('dataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function openSession(string $configName, string $responseXml): void
    {
        if ($configName === '' || $configName === '0') {
            $this->expectException(ServiceException::class);
            $this->expectExceptionMessage('Internal Server Error');
        }

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);
        $serviceFactory = new SoapServiceFactory($soapClient);

        try {
            $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger, true);
            $result = $service->openSession($configName);
        } catch (ServiceException $exception) {
            // assert error response handling
            CommunicationExpectation::assertErrorsLogged(
                $soapClient->__getLastRequest(),
                $soapClient->__getLastResponse(),
                $logger
            );

            throw $exception;
        }

        // assert successful response handling
        self::assertNotEmpty($result);
        CommunicationExpectation::assertCommunicationLogged(
            $soapClient->__getLastRequest(),
            $soapClient->__getLastResponse(),
            $logger
        );
    }

    /**
     * Scenario: Open a session with wrong credentials
     *
     * Assert that
     * - communication gets logged
     * - an authentication exception is thrown
     *
     *
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('authFailureDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function openSessionAuthError(string $responseXml): void
    {
        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage(ErrorHandlerDecorator::AUTH_ERROR_MESSAGE);

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);
        $serviceFactory = new SoapServiceFactory($soapClient);

        try {
            $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger, true);
            $service->openSession('foo');
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
     *
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('serverErrorDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function openSessionServerError(string $responseXml): void
    {
        $this->expectException(ServiceException::class);
        $this->expectExceptionMessage('Internal Server Error');

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);
        $serviceFactory = new SoapServiceFactory($soapClient);

        try {
            $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger, true);
            $service->openSession('foo');
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
