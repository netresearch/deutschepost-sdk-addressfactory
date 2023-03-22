<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class ExtFieldType
{
    private string $_;

    private string $name;

    public function __construct(
        string $value,
        string $name
    ) {
        $this->_ = $value;
        $this->name = $name;
    }

    public function getValue(): string
    {
        return $this->_;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
