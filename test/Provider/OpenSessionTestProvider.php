<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Provider;

/**
 * Class OpenSessionTestProvider
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class OpenSessionTestProvider
{
    /**
     * Provide request and response for the test case.
     *
     * @return mixed[]
     */
    public static function openSession(): array
    {
        $successResponseXml = \file_get_contents(__DIR__ . '/_files/openSession/openSessionResponse.xml');
        $errorResponseXml = \file_get_contents(__DIR__ . '/_files/errors/serverErrorResponse.xml');

        return [
            'success' => ['default', $successResponseXml],
            'failure' => ['', $errorResponseXml],
        ];
    }
}
