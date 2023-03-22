<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class PreisType
{
    private float $_;

    private string $currencyCode;

    public function getValue(): float
    {
        return $this->_;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
}
