<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class TypAenderungType extends TypAenderungRestriction
{
    /**
     * @var Ziel $Ziel
     */
    protected $Ziel;

    /**
     * @return Ziel
     */
    public function getZiel(): Ziel
    {
        return $this->Ziel;
    }
}
