<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class IdentifizierungType extends TaetigkeitType
{
    private KategorieType $Kategorie;

    private FehltrefferType $Fehltreffer;

    private bool $erfolg;

    /**
     * One of: Haerte0, Haerte1, Haerte2, Haerte3
     *
     * @var string
     */
    private string $genauigkeit;

    public function getKategorie(): KategorieType
    {
        return $this->Kategorie;
    }

    public function getFehltreffer(): FehltrefferType
    {
        return $this->Fehltreffer;
    }

    public function getErfolg(): bool
    {
        return $this->erfolg;
    }

    public function getGenauigkeit(): string
    {
        return $this->genauigkeit;
    }
}
