<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Provider;

class FailureTestProvider
{
    /**
     * Provide response for the test case:
     * - Invalid/Empty credentials sent to the API, soap fault thrown.
     *
     * @return mixed[]
     */
    public static function authInvalidCredentials(): array
    {
        $invalidCredentialsResponseXml = \file_get_contents(__DIR__ . '/_files/errors/invalidCredentialsResponse.xml');
        $missingHeaderResponseXml = \file_get_contents(__DIR__ . '/_files/errors/missingHeaderResponse.xml');

        return [
            'empty_credentials' => ['', '', $invalidCredentialsResponseXml],
            'invalid_credentials' => ['username', 'password', $invalidCredentialsResponseXml],
            'auth_header_missing' => ['username', 'password', $missingHeaderResponseXml],
        ];
    }

    public static function authenticationFailed(): array
    {
        return [
            'authentication_failed' => [\file_get_contents(__DIR__ . '/_files/errors/invalidCredentialsResponse.xml')],
        ];
    }

    public static function serverError(): array
    {
        return [
            'server_error' => [\file_get_contents(__DIR__ . '/_files/errors/serverErrorResponse.xml')],
        ];
    }
}
