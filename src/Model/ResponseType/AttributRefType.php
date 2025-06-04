<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class AttributRefType
{
    /**
     * @var ZusatzInfoType[] $ZusatzInfo
     */
    private array $ZusatzInfo;

    private string $name;

    /**
     * @return ZusatzInfoType[]
     */
    public function getZusatzInfo(): array
    {
        return $this->ZusatzInfo;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
