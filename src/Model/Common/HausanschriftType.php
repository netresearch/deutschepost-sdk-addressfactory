<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class HausanschriftType
{
    /**
     * @var StrasseType|null
     */
    protected $Strasse;

    /**
     * @var string|null $Hausnr
     */
    protected $Hausnr;

    /**
     * @var string|null $HausnrZusatz
     */
    protected $HausnrZusatz;

    /**
     * @var string|null $Plz
     */
    protected $Plz;

    /**
     * @var OrtType|null
     */
    protected $Ort;

    /**
     * @var OrtszusatzType|null
     */
    protected $Ortszusatz;

    /**
     * @var string|null $Ortsteil
     */
    protected $Ortsteil;

    /**
     * @var string|null $Gemeinde
     */
    protected $Gemeinde;

    /**
     * @var string|null $Kreis
     */
    protected $Kreis;

    /**
     * @var string|null $RegBezirk
     */
    protected $RegBezirk;

    /**
     * @var string|null $Bundesland
     */
    protected $Bundesland;

    /**
     * @var string|null $Land
     */
    protected $Land;

    /**
     * @var LeitdatenType|null $Leitdaten
     */
    protected $Leitdaten;

    /**
     * @return StrasseType|null
     */
    public function getStrasse(): ?StrasseType
    {
        return $this->Strasse;
    }

    /**
     * @param StrasseType $Strasse
     *
     * @return HausanschriftType
     */
    public function setStrasse(StrasseType $Strasse): HausanschriftType
    {
        $this->Strasse = $Strasse;
        return $this;
    }

    /**
     * @return string
     */
    public function getHausnr(): string
    {
        return (string) $this->Hausnr;
    }

    /**
     * @param string $Hausnr
     *
     * @return HausanschriftType
     */
    public function setHausnr(string $Hausnr): HausanschriftType
    {
        $this->Hausnr = $Hausnr;
        return $this;
    }

    /**
     * @return string
     */
    public function getHausnrZusatz(): string
    {
        return (string) $this->HausnrZusatz;
    }

    /**
     * @param string $HausnrZusatz
     *
     * @return HausanschriftType
     */
    public function setHausnrZusatz(string $HausnrZusatz): HausanschriftType
    {
        $this->HausnrZusatz = $HausnrZusatz;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlz(): string
    {
        return (string) $this->Plz;
    }

    /**
     * @param string $Plz
     *
     * @return HausanschriftType
     */
    public function setPlz(string $Plz): HausanschriftType
    {
        $this->Plz = $Plz;
        return $this;
    }

    /**
     * @return OrtType|null
     */
    public function getOrt(): ?OrtType
    {
        return $this->Ort;
    }

    /**
     * @param OrtType $Ort
     *
     * @return HausanschriftType
     */
    public function setOrt(OrtType $Ort): HausanschriftType
    {
        $this->Ort = $Ort;
        return $this;
    }

    /**
     * @return OrtszusatzType|null
     */
    public function getOrtszusatz(): ?OrtszusatzType
    {
        return $this->Ortszusatz;
    }

    /**
     * @param OrtszusatzType $Ortszusatz
     *
     * @return HausanschriftType
     */
    public function setOrtszusatz(OrtszusatzType $Ortszusatz): HausanschriftType
    {
        $this->Ortszusatz = $Ortszusatz;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrtsteil(): string
    {
        return (string) $this->Ortsteil;
    }

    /**
     * @param string $Ortsteil
     *
     * @return HausanschriftType
     */
    public function setOrtsteil(string $Ortsteil): HausanschriftType
    {
        $this->Ortsteil = $Ortsteil;
        return $this;
    }

    /**
     * @return string
     */
    public function getGemeinde(): string
    {
        return (string) $this->Gemeinde;
    }

    /**
     * @param string $Gemeinde
     *
     * @return HausanschriftType
     */
    public function setGemeinde(string $Gemeinde): HausanschriftType
    {
        $this->Gemeinde = $Gemeinde;
        return $this;
    }

    /**
     * @return string
     */
    public function getKreis(): string
    {
        return (string) $this->Kreis;
    }

    /**
     * @param string $Kreis
     *
     * @return HausanschriftType
     */
    public function setKreis(string $Kreis): HausanschriftType
    {
        $this->Kreis = $Kreis;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegBezirk(): string
    {
        return (string) $this->RegBezirk;
    }

    /**
     * @param string $RegBezirk
     *
     * @return HausanschriftType
     */
    public function setRegBezirk(string $RegBezirk): HausanschriftType
    {
        $this->RegBezirk = $RegBezirk;
        return $this;
    }

    /**
     * @return string
     */
    public function getBundesland(): string
    {
        return (string) $this->Bundesland;
    }

    /**
     * @param string $Bundesland
     *
     * @return HausanschriftType
     */
    public function setBundesland(string $Bundesland): HausanschriftType
    {
        $this->Bundesland = $Bundesland;
        return $this;
    }

    /**
     * @return string
     */
    public function getLand(): string
    {
        return (string) $this->Land;
    }

    /**
     * @param string $Land
     *
     * @return HausanschriftType
     */
    public function setLand(string $Land): HausanschriftType
    {
        $this->Land = $Land;
        return $this;
    }

    /**
     * @return LeitdatenType|null
     */
    public function getLeitdaten(): ?LeitdatenType
    {
        return $this->Leitdaten;
    }

    /**
     * @param LeitdatenType $Leitdaten
     *
     * @return HausanschriftType
     */
    public function setLeitdaten(LeitdatenType $Leitdaten): HausanschriftType
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
