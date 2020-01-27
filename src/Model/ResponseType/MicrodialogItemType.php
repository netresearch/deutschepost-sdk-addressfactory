<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class MicrodialogItemType
{
    /**
     * @var MicrodialogElementType[] $Element
     */
    protected $Element;

    /**
     * @return MicrodialogElementType[]
     */
    public function getElement(): array
    {
        return $this->Element;
    }
}
