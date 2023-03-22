<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class FehltrefferType
{
    /**
     * @var AttributRefType[] $AttributRef
     */
    private array $AttributRef;

    private bool $mehrdeutig;

    private int $code;

    /**
     * @return AttributRefType[]
     */
    public function getAttributRef(): array
    {
        return $this->AttributRef;
    }

    public function getMehrdeutig(): bool
    {
        return $this->mehrdeutig;
    }

    public function getCode(): int
    {
        return $this->code;
    }
}
