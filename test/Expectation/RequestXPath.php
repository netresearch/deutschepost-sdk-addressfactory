<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation;

class RequestXPath
{
    /**
     * RequestXPath constructor.
     */
    public function __construct(private readonly string $xpath, private readonly string $value)
    {
    }

    public function getXpath(): string
    {
        return $this->xpath;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
