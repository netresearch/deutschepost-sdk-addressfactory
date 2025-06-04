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
use PostDirekt\Sdk\AddressfactoryDirect\Test\Provider\CloseSessionTestProvider;
use PostDirekt\Sdk\AddressfactoryDirect\Test\Provider\FailureTestProvider;
use PostDirekt\Sdk\AddressfactoryDirect\Test\SoapClientTestCase;
use Psr\Log\Test\TestLogger;

class CloseSessionTest extends SoapClientTestCase
{
    /**
     * @return mixed[]
     */
    public static function dataProvider(): array
    {
        return CloseSessionTestProvider::closeSession();
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
     * Scenario: Close a session
     *
     * Closing a session returns an empty response with HTTP status code 200
     * no matter if the session id exists or not. Closing a session can only
     * fail with an authentication error (covered by a different test).
     *
     * Assert that web service communication gets logged.
     *
     *
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('dataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function closeSession(string $sessionId, string $responseXml): void
    {
        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger);
        $service->closeSession($sessionId);

        // Assert successful communication gets logged.
        CommunicationExpectation::assertCommunicationLogged(
            $soapClient->__getLastRequest(),
            $soapClient->__getLastResponse(),
            $logger
        );
    }

    /**
     * Scenario: Close a session with wrong credentials
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
    public function closeSessionAuthError(string $responseXml): void
    {
        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage(ErrorHandlerDecorator::AUTH_ERROR_MESSAGE);

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);
        $serviceFactory = new SoapServiceFactory($soapClient);

        try {
            $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger, true);
            $service->closeSession('bar#!');
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
    public function closeSessionServerError(string $responseXml): void
    {
        $this->expectException(ServiceException::class);
        $this->expectExceptionMessage('Internal Server Error');

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);
        $serviceFactory = new SoapServiceFactory($soapClient);

        try {
            $service = $serviceFactory->createAddressVerificationService('user', 'password', $logger, true);
            $service->closeSession('bar#!');
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
