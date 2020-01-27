<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\AdrItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\NameItemType;

class MoveSourceType
{
    /**
     * @var NameItemType $NameItem
     */
    protected $NameItem;

    /**
     * @var AdrItemType $AdrItem
     */
    protected $AdrItem;

    /**
     * @return NameItemType
     */
    public function getNameItem(): NameItemType
    {
        return $this->NameItem;
    }

    /**
     * @return AdrItemType
     */
    public function getAdrItem(): AdrItemType
    {
        return $this->AdrItem;
    }
}
