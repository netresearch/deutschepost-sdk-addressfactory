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
    protected $ZusatzInfo;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @return ZusatzInfoType[]
     */
    public function getZusatzInfo(): array
    {
        return $this->ZusatzInfo;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
