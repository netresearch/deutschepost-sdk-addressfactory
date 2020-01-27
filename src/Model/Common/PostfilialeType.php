<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class PostfilialeType
{
    /**
     * @var string $Nr
     */
    protected $Nr;

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
    public function getNr(): string
    {
        return $this->Nr;
    }

    /**
     * @param string $Nr
     *
     * @return PostfilialeType
     */
    public function setNr(string $Nr): PostfilialeType
    {
        $this->Nr = $Nr;
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
     * @return PostfilialeType
     */
    public function setPlz(string $Plz): PostfilialeType
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
     * @return PostfilialeType
     */
    public function setOrt(OrtType $Ort): PostfilialeType
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
     * @return PostfilialeType
     */
    public function setOrtszusatz(OrtszusatzType $Ortszusatz): PostfilialeType
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
     * @return PostfilialeType
     */
    public function setGemeinde(string $Gemeinde): PostfilialeType
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
     * @return PostfilialeType
     */
    public function setKreis($Kreis)
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
     * @return PostfilialeType
     */
    public function setRegBezirk($RegBezirk)
    {
        $this->RegBezirk = $RegBezirk;
        return $this;
    }

    /**
     * @return string
     */
    public function getBundesland()
    {
        return $this->Bundesland;
    }

    /**
     * @param string $Bundesland
     *
     * @return PostfilialeType
     */
    public function setBundesland($Bundesland)
    {
        $this->Bundesland = $Bundesland;
        return $this;
    }

    /**
     * @return LeitdatenType
     */
    public function getLeitdaten()
    {
        return $this->Leitdaten;
    }

    /**
     * @param LeitdatenType $Leitdaten
     *
     * @return PostfilialeType
     */
    public function setLeitdaten($Leitdaten)
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
