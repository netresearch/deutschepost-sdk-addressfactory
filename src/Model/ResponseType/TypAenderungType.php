<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class TypAenderungType extends TypAenderungRestriction
{
    private Ziel $Ziel;

    public function getZiel(): Ziel
    {
        return $this->Ziel;
    }
}
