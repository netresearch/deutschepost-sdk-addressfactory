<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class GruppeninfoType
{
    private KopfdubletteType $Kopfdublette;

    private int $gruppe;

    private int $sequenceId;

    public function getKopfdublette(): KopfdubletteType
    {
        return $this->Kopfdublette;
    }

    public function getGruppe(): int
    {
        return $this->gruppe;
    }

    public function getSequenceId(): int
    {
        return $this->sequenceId;
    }
}
