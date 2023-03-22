<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class DublettenpruefungType extends DublettenpruefungRestriction
{
    private GruppeninfoType $Gruppeninfo;

    public function getGruppeninfo(): GruppeninfoType
    {
        return $this->Gruppeninfo;
    }
}
