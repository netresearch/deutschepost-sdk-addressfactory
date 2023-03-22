<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class Ziel
{
    private string $elementRef;

    public function getElementRef(): string
    {
        return $this->elementRef;
    }
}
