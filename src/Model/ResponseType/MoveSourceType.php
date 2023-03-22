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
    private NameItemType $NameItem;

    private AdrItemType $AdrItem;

    public function getNameItem(): NameItemType
    {
        return $this->NameItem;
    }

    public function getAdrItem(): AdrItemType
    {
        return $this->AdrItem;
    }
}
