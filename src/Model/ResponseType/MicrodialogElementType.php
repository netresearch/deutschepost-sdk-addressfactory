<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class MicrodialogElementType
{
    /**
     * @var MicrodialogAttributType[] $Attribut
     */
    protected $Attribut;

    /**
     * @return MicrodialogAttributType[]
     */
    public function getAttribut(): array
    {
        return $this->Attribut;
    }
}
