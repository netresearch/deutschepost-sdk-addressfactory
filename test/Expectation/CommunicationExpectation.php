<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation;

use PHPUnit\Framework\Assert;
use Psr\Log\Test\TestLogger;

class CommunicationExpectation
{
    /**
     * Mock client does not send headers, only check for request body being logged.
     */
    public static function assertCommunicationLogged(string $requestXml, string $responseXml, TestLogger $logger): void
    {
        Assert::assertTrue($logger->hasInfoThatContains($requestXml), 'Logged messages do not contain request');
        Assert::assertTrue($logger->hasInfoThatContains($responseXml), 'Logged messages do not contain response');
    }

    /**
     * Mock client does not send headers, only check for request body being logged.
     */
    public static function assertErrorsLogged(string $requestXml, string $responseXml, TestLogger $logger): void
    {
        Assert::assertTrue($logger->hasErrorThatContains($requestXml), 'Logged messages do not contain request');
        Assert::assertTrue($logger->hasErrorThatContains($responseXml), 'Logged messages do not contain response');
    }
}
