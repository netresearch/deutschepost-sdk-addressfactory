<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation;

class RequestXPath
{
    /**
     * @var string
     */
    private $xpath;

    /**
     * @var string
     */
    private $value;

    /**
     * RequestXPath constructor.
     *
     * @param string $xpath
     * @param string $value
     */
    public function __construct(string $xpath, string $value)
    {
        $this->xpath = $xpath;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getXpath(): string
    {
        return $this->xpath;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
