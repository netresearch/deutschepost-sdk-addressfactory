<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Provider;

/**
 * Class CloseSessionTestProvider
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class CloseSessionTestProvider
{
    /**
     * Provide request and response for the test case.
     *
     * @return mixed[]
     */
    public static function closeSession(): array
    {
        $responseXml = \file_get_contents(__DIR__ . '/_files/closeSession/closeSessionResponse.xml');

        return [
            'success' => ['session-id', $responseXml],
        ];
    }
}
