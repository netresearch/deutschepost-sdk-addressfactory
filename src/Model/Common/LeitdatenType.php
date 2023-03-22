<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class LeitdatenType
{
    private ?string $Leitcode = null;

    private ?string $Alort = null;

    private ?string $Frachtzentrum = null;

    private ?string $StrSchluessel = null;

    private ?string $Kgs = null;

    public function getLeitcode(): string
    {
        return (string) $this->Leitcode;
    }

    public function setLeitcode(string $Leitcode): LeitdatenType
    {
        $this->Leitcode = $Leitcode;
        return $this;
    }

    public function getAlort(): string
    {
        return (string) $this->Alort;
    }

    public function setAlort(string $Alort): LeitdatenType
    {
        $this->Alort = $Alort;
        return $this;
    }

    public function getFrachtzentrum(): string
    {
        return (string) $this->Frachtzentrum;
    }

    public function setFrachtzentrum(string $Frachtzentrum): LeitdatenType
    {
        $this->Frachtzentrum = $Frachtzentrum;
        return $this;
    }

    public function getStrSchluessel(): string
    {
        return (string) $this->StrSchluessel;
    }

    public function setStrSchluessel(string $StrSchluessel): LeitdatenType
    {
        $this->StrSchluessel = $StrSchluessel;
        return $this;
    }

    public function getKgs(): string
    {
        return (string) $this->Kgs;
    }

    public function setKgs(string $Kgs): LeitdatenType
    {
        $this->Kgs = $Kgs;
        return $this;
    }
}
