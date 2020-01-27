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
    protected $AttributRef;

    /**
     * @var boolean $mehrdeutig
     */
    protected $mehrdeutig;

    /**
     * @var int $code
     */
    protected $code;

    /**
     * @return AttributRefType[]
     */
    public function getAttributRef(): array
    {
        return $this->AttributRef;
    }

    /**
     * @return boolean
     */
    public function getMehrdeutig(): bool
    {
        return $this->mehrdeutig;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }
}
