<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class Quelle
{
    /**
     * @var AttributRefType $Ziel
     */
    protected $Ziel;

    /**
     * @return AttributRefType
     */
    public function getZiel(): AttributRefType
    {
        return $this->Ziel;
    }
}
