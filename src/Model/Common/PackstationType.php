<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class PackstationType
{
    private ?string $Nr = null;

    private ?string $Plz = null;

    private ?OrtType $Ort = null;

    private ?OrtszusatzType $Ortszusatz = null;

    private ?string $Gemeinde = null;

    private ?string $Kreis = null;

    private ?string $RegBezirk = null;

    private ?string $Bundesland = null;

    private ?LeitdatenType $Leitdaten = null;

    public function getNr(): string
    {
        return (string) $this->Nr;
    }

    public function setNr(string $Nr): PackstationType
    {
        $this->Nr = $Nr;
        return $this;
    }

    public function getPlz(): string
    {
        return (string) $this->Plz;
    }

    public function setPlz(string $Plz): PackstationType
    {
        $this->Plz = $Plz;
        return $this;
    }

    public function getOrt(): ?OrtType
    {
        return $this->Ort;
    }

    public function setOrt(OrtType $Ort): PackstationType
    {
        $this->Ort = $Ort;
        return $this;
    }

    public function getOrtszusatz(): ?OrtszusatzType
    {
        return $this->Ortszusatz;
    }

    public function setOrtszusatz(OrtszusatzType $Ortszusatz): PackstationType
    {
        $this->Ortszusatz = $Ortszusatz;
        return $this;
    }

    public function getGemeinde(): string
    {
        return (string) $this->Gemeinde;
    }

    public function setGemeinde(string $Gemeinde): PackstationType
    {
        $this->Gemeinde = $Gemeinde;
        return $this;
    }

    public function getKreis(): string
    {
        return (string) $this->Kreis;
    }

    public function setKreis(string $Kreis): PackstationType
    {
        $this->Kreis = $Kreis;
        return $this;
    }

    public function getRegBezirk(): string
    {
        return (string) $this->RegBezirk;
    }

    public function setRegBezirk(string $RegBezirk): PackstationType
    {
        $this->RegBezirk = $RegBezirk;
        return $this;
    }

    public function getBundesland(): string
    {
        return (string) $this->Bundesland;
    }

    public function setBundesland(string $Bundesland): PackstationType
    {
        $this->Bundesland = $Bundesland;
        return $this;
    }

    public function getLeitdaten(): ?LeitdatenType
    {
        return $this->Leitdaten;
    }

    public function setLeitdaten(LeitdatenType $Leitdaten): PackstationType
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
