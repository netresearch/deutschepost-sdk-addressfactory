<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class StatusItemType
{
    private TechStatusType $TechStatus;

    private StatusCodeItemType $PDStatusCodeItem;

    private StatusCodeItemType $CustomStatusCodeItem;

    public function getTechStatus(): TechStatusType
    {
        return $this->TechStatus;
    }

    public function getPDStatusCodeItem(): StatusCodeItemType
    {
        return $this->PDStatusCodeItem;
    }

    public function getCustomStatusCodeItem(): StatusCodeItemType
    {
        return $this->CustomStatusCodeItem;
    }
}
