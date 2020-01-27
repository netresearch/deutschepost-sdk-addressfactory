<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class GEType
{
    /**
     * @var string $Name
     */
    protected $Name;

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
     * @var LeitdatenType $Leitdaten
     */
    protected $Leitdaten;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     *
     * @return GEType
     */
    public function setName(string $Name): GEType
    {
        $this->Name = $Name;
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
     * @return GEType
     */
    public function setPlz(string $Plz): GEType
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
     * @return GEType
     */
    public function setOrt(OrtType $Ort): GEType
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
     * @return GEType
     */
    public function setOrtszusatz(OrtszusatzType $Ortszusatz): GEType
    {
        $this->Ortszusatz = $Ortszusatz;
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
     * @return GEType
     */
    public function setGemeinde(string $Gemeinde): GEType
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
     * @return GEType
     */
    public function setKreis(string $Kreis): GEType
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
     * @return GEType
     */
    public function setRegBezirk(string $RegBezirk): GEType
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
     * @return GEType
     */
    public function setBundesland(string $Bundesland): GEType
    {
        $this->Bundesland = $Bundesland;
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
     * @return GEType
     */
    public function setLeitdaten(LeitdatenType $Leitdaten): GEType
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
