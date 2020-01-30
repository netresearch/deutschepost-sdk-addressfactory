<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class ExtFieldItemType
{
    /**
     * @var ExtFieldType[] $ExtField
     */
    protected $ExtField;

    /**
     * @param ExtFieldType[] $ExtField
     */
    public function __construct(array $ExtField)
    {
        $this->ExtField = $ExtField;
    }

    /**
     * @return ExtFieldType[]
     */
    public function getExtField(): array
    {
        return $this->ExtField;
    }
}
