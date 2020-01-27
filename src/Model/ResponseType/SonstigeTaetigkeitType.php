<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\ExtFieldItemType;

class SonstigeTaetigkeitType extends TaetigkeitType
{
    /**
     * @var ExtFieldItemType $ExtFieldItem
     */
    protected $ExtFieldItem;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @return ExtFieldItemType
     */
    public function getExtFieldItem(): ExtFieldItemType
    {
        return $this->ExtFieldItem;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
