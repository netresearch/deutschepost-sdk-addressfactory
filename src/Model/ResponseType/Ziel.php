<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class Ziel
{
    /**
     * @var string $elementRef
     */
    protected $elementRef;

    /**
     * @return string
     */
    public function getElementRef(): string
    {
        return $this->elementRef;
    }
}
