<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class IdentifizierungType extends TaetigkeitType
{
    /**
     * @var KategorieType $Kategorie
     */
    protected $Kategorie;

    /**
     * @var FehltrefferType $Fehltreffer
     */
    protected $Fehltreffer;

    /**
     * @var boolean $erfolg
     */
    protected $erfolg;

    /**
     * One of: Haerte0, Haerte1, Haerte2, Haerte3
     *
     * @var string
     */
    protected $genauigkeit;

    /**
     * @return KategorieType
     */
    public function getKategorie(): KategorieType
    {
        return $this->Kategorie;
    }

    /**
     * @return FehltrefferType
     */
    public function getFehltreffer(): FehltrefferType
    {
        return $this->Fehltreffer;
    }

    /**
     * @return boolean
     */
    public function getErfolg(): bool
    {
        return $this->erfolg;
    }

    /**
     * @return string
     */
    public function getGenauigkeit(): string
    {
        return $this->genauigkeit;
    }
}
