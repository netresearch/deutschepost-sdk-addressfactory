<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class GruppeninfoType
{
    /**
     * @var KopfdubletteType $Kopfdublette
     */
    protected $Kopfdublette;

    /**
     * @var int $gruppe
     */
    protected $gruppe;

    /**
     * @var int $sequenceId
     */
    protected $sequenceId;

    /**
     * @return KopfdubletteType
     */
    public function getKopfdublette(): KopfdubletteType
    {
        return $this->Kopfdublette;
    }

    /**
     * @return int
     */
    public function getGruppe(): int
    {
        return $this->gruppe;
    }

    /**
     * @return int
     */
    public function getSequenceId(): int
    {
        return $this->sequenceId;
    }
}
