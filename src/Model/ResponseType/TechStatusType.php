<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class TechStatusType
{
    /**
     * @var ModuleStatusType[] $ModuleStatus
     */
    protected $ModuleStatus;

    /**
     * @return ModuleStatusType[]
     */
    public function getModuleStatus(): array
    {
        return $this->ModuleStatus;
    }
}
