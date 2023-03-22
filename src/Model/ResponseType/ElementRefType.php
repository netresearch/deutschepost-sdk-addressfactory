<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class ElementRefType
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }
}
