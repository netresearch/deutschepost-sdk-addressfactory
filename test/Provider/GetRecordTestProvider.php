<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Provider;

class GetRecordTestProvider
{
    /**
     * Provide request and response for regular address validation.
     *
     * @return mixed[]
     */
    public static function processAddressSuccess(): array
    {
        $responseXml = \file_get_contents(__DIR__ . '/_files/getRecord/addressResponse.xml');

        return [
            'success_with_session' => ['session-id', null, null, $responseXml],
            'success_with_config' => [null, 'config-name', null, $responseXml],
            'success_with_client' => [null, 'config-name', 'client-id', $responseXml],
        ];
    }

    /**
     * Provide request and response for Packstation validation.
     *
     * @return mixed[]
     */
    public static function processPackstationSuccess(): array
    {
        $responseXml = \file_get_contents(__DIR__ . '/_files/getRecord/packstationResponse.xml');

        return [
            'success_with_session' => ['session-id', null, null, $responseXml],
            'success_with_config' => [null, 'config-name', null, $responseXml],
            'success_with_client' => [null, 'config-name', 'client-id', $responseXml],
        ];
    }

    /**
     * Provide request and response for Postoffice validation.
     *
     * @return mixed[]
     */
    public static function processPostfilialeSuccess(): array
    {
        $responseXml = \file_get_contents(__DIR__ . '/_files/getRecord/postfilialeResponse.xml');

        return [
            'success_with_session' => ['session-id', null, null, $responseXml],
            'success_with_config' => [null, 'config-name', null, $responseXml],
            'success_with_client' => [null, 'config-name', 'client-id', $responseXml],
        ];
    }

    /**
     * Provide request and response for Postfach validation.
     *
     * @return mixed[]
     */
    public static function processPostfachSuccess(): array
    {
        $responseXml = \file_get_contents(__DIR__ . '/_files/getRecord/postfachResponse.xml');

        return [
            'success_with_session' => ['session-id', null, null, $responseXml],
            'success_with_config' => [null, 'config-name', null, $responseXml],
            'success_with_client' => [null, 'config-name', 'client-id', $responseXml],
        ];
    }

    /**
     * Provide request and response for Bulkstation validation.
     *
     * @return mixed[]
     */
    public static function processGeSuccess(): array
    {
        $responseXml = \file_get_contents(__DIR__ . '/_files/getRecord/geResponse.xml');

        return [
            'success_with_session' => ['session-id', null, null, $responseXml],
            'success_with_config' => [null, 'config-name', null, $responseXml],
            'success_with_client' => [null, 'config-name', 'client-id', $responseXml],
        ];
    }
}
