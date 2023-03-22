<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\ExtFieldItemType;

class SonstigeTaetigkeitType extends TaetigkeitType
{
    private ExtFieldItemType $ExtFieldItem;

    private string $name;

    public function getExtFieldItem(): ExtFieldItemType
    {
        return $this->ExtFieldItem;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
