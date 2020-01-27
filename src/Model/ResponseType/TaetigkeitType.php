<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

abstract class TaetigkeitType
{
    /**
     * @var AttributRefType[] $AttributRef
     */
    protected $AttributRef;

    /**
     * @var ZusatzInfoType[] $ZusatzInfo
     */
    protected $ZusatzInfo;

    /**
     * @var string $elementRef
     */
    protected $elementRef;

    /**
     * @return AttributRefType[]
     */
    public function getAttributRef(): array
    {
        return $this->AttributRef;
    }

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
    public function getElementRef(): string
    {
        return $this->elementRef;
    }
}
