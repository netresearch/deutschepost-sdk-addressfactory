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
use PostDirekt\Sdk\AddressfactoryDirect\Test\SoapClientTestCase;
use Psr\Log\Test\TestLogger;

class AuthenticationTest extends SoapClientTestCase
{
    /**
     * @return mixed[]
     */
    public static function invalidCredentialsDataProvider(): array
    {
        return FailureTestProvider::authInvalidCredentials();
    }

    /**
     * Tests sending a request with invalid authentication credentials.
     * This should result into an "401 Unauthorized" error.
     *
     *
     *
     * @throws ServiceException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('invalidCredentialsDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function createAuthenticationErrorRequest(
        string $username,
        string $password,
        string $responseXml
    ): void {
        $this->expectException(AuthenticationException::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage(ErrorHandlerDecorator::AUTH_ERROR_MESSAGE);

        $logger = new TestLogger();
        $soapClient = $this->getSoapClientMock($responseXml);

        try {
            $serviceFactory = new SoapServiceFactory($soapClient);
            $service = $serviceFactory->createAddressVerificationService($username, $password, $logger);
            $service->openSession('config-name');
        } catch (AuthenticationException $exception) {
            // Assert communication gets logged.
            CommunicationExpectation::assertErrorsLogged(
                $soapClient->__getLastRequest(),
                $soapClient->__getLastResponse(),
                $logger
            );

            throw $exception;
        }
    }
}
