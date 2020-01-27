<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class PreisType
{
    /**
     * @var float
     */
    protected $_;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode;

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->_;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
}
