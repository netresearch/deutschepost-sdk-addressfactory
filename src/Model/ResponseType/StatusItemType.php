<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class StatusItemType
{
    /**
     * @var TechStatusType $TechStatus
     */
    protected $TechStatus;

    /**
     * @var StatusCodeItemType $PDStatusCodeItem
     */
    protected $PDStatusCodeItem;

    /**
     * @var StatusCodeItemType $CustomStatusCodeItem
     */
    protected $CustomStatusCodeItem;

    /**
     * @return TechStatusType
     */
    public function getTechStatus(): TechStatusType
    {
        return $this->TechStatus;
    }

    /**
     * @return StatusCodeItemType
     */
    public function getPDStatusCodeItem(): StatusCodeItemType
    {
        return $this->PDStatusCodeItem;
    }

    /**
     * @return StatusCodeItemType
     */
    public function getCustomStatusCodeItem(): StatusCodeItemType
    {
        return $this->CustomStatusCodeItem;
    }
}
