<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class StatusCodeItemType
{
    /**
     * @var ModuleCodesType[] $ModuleCodes
     */
    private array $ModuleCodes;

    /**
     * @return ModuleCodesType[]
     */
    public function getModuleCodes(): array
    {
        return $this->ModuleCodes;
    }
}
