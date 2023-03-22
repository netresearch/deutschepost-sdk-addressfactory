<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class HausanschriftType
{
    private ?StrasseType $Strasse = null;

    private ?string $Hausnr = null;

    private ?string $HausnrZusatz = null;

    private ?string $Plz = null;

    private ?OrtType $Ort = null;

    private ?OrtszusatzType $Ortszusatz = null;

    private ?string $Ortsteil = null;

    private ?string $Gemeinde = null;

    private ?string $Kreis = null;

    private ?string $RegBezirk = null;

    private ?string $Bundesland = null;

    private ?string $Land = null;

    private ?LeitdatenType $Leitdaten = null;

    public function getStrasse(): ?StrasseType
    {
        return $this->Strasse;
    }

    public function setStrasse(StrasseType $Strasse): HausanschriftType
    {
        $this->Strasse = $Strasse;
        return $this;
    }

    public function getHausnr(): string
    {
        return (string) $this->Hausnr;
    }

    public function setHausnr(string $Hausnr): HausanschriftType
    {
        $this->Hausnr = $Hausnr;
        return $this;
    }

    public function getHausnrZusatz(): string
    {
        return (string) $this->HausnrZusatz;
    }

    public function setHausnrZusatz(string $HausnrZusatz): HausanschriftType
    {
        $this->HausnrZusatz = $HausnrZusatz;
        return $this;
    }

    public function getPlz(): string
    {
        return (string) $this->Plz;
    }

    public function setPlz(string $Plz): HausanschriftType
    {
        $this->Plz = $Plz;
        return $this;
    }

    public function getOrt(): ?OrtType
    {
        return $this->Ort;
    }

    public function setOrt(OrtType $Ort): HausanschriftType
    {
        $this->Ort = $Ort;
        return $this;
    }

    public function getOrtszusatz(): ?OrtszusatzType
    {
        return $this->Ortszusatz;
    }

    public function setOrtszusatz(OrtszusatzType $Ortszusatz): HausanschriftType
    {
        $this->Ortszusatz = $Ortszusatz;
        return $this;
    }

    public function getOrtsteil(): string
    {
        return (string) $this->Ortsteil;
    }

    public function setOrtsteil(string $Ortsteil): HausanschriftType
    {
        $this->Ortsteil = $Ortsteil;
        return $this;
    }

    public function getGemeinde(): string
    {
        return (string) $this->Gemeinde;
    }

    public function setGemeinde(string $Gemeinde): HausanschriftType
    {
        $this->Gemeinde = $Gemeinde;
        return $this;
    }

    public function getKreis(): string
    {
        return (string) $this->Kreis;
    }

    public function setKreis(string $Kreis): HausanschriftType
    {
        $this->Kreis = $Kreis;
        return $this;
    }

    public function getRegBezirk(): string
    {
        return (string) $this->RegBezirk;
    }

    public function setRegBezirk(string $RegBezirk): HausanschriftType
    {
        $this->RegBezirk = $RegBezirk;
        return $this;
    }

    public function getBundesland(): string
    {
        return (string) $this->Bundesland;
    }

    public function setBundesland(string $Bundesland): HausanschriftType
    {
        $this->Bundesland = $Bundesland;
        return $this;
    }

    public function getLand(): string
    {
        return (string) $this->Land;
    }

    public function setLand(string $Land): HausanschriftType
    {
        $this->Land = $Land;
        return $this;
    }

    public function getLeitdaten(): ?LeitdatenType
    {
        return $this->Leitdaten;
    }

    public function setLeitdaten(LeitdatenType $Leitdaten): HausanschriftType
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
