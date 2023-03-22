<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class ZusatzInfoType
{
    private string $_;

    private string $name;

    public function getValue(): string
    {
        return $this->_;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
