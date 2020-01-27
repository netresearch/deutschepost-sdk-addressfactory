<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class HausanschriftType
{
    /**
     * @var StrasseType $Strasse
     */
    protected $Strasse;

    /**
     * @var string $Hausnr
     */
    protected $Hausnr;

    /**
     * @var string $HausnrZusatz
     */
    protected $HausnrZusatz;

    /**
     * @var string $Plz
     */
    protected $Plz;

    /**
     * @var OrtType $Ort
     */
    protected $Ort;

    /**
     * @var OrtszusatzType $Ortszusatz
     */
    protected $Ortszusatz;

    /**
     * @var string $Ortsteil
     */
    protected $Ortsteil;

    /**
     * @var string $Gemeinde
     */
    protected $Gemeinde;

    /**
     * @var string $Kreis
     */
    protected $Kreis;

    /**
     * @var string $RegBezirk
     */
    protected $RegBezirk;

    /**
     * @var string $Bundesland
     */
    protected $Bundesland;

    /**
     * @var string $Land
     */
    protected $Land;

    /**
     * @var LeitdatenType $Leitdaten
     */
    protected $Leitdaten;

    /**
     * @return StrasseType
     */
    public function getStrasse(): StrasseType
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
        return $this->Hausnr;
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
        return $this->HausnrZusatz;
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
        return $this->Plz;
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
     * @return OrtType
     */
    public function getOrt(): OrtType
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
     * @return OrtszusatzType
     */
    public function getOrtszusatz(): OrtszusatzType
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
        return $this->Ortsteil;
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
        return $this->Gemeinde;
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
        return $this->Kreis;
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
        return $this->RegBezirk;
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
        return $this->Bundesland;
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
        return $this->Land;
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
     * @return LeitdatenType
     */
    public function getLeitdaten(): LeitdatenType
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
