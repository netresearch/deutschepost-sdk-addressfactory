<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class StrasseType
{
    private string $_;

    private ?string $kurz = null;

    public function __construct(string $value)
    {
        $this->_ = $value;
    }

    public function getValue(): string
    {
        return $this->_;
    }

    public function getKurz(): string
    {
        return (string) $this->kurz;
    }

    public function setKurz(string $kurz): StrasseType
    {
        $this->kurz = $kurz;
        return $this;
    }
}
