<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class PostfilialeType
{
    /**
     * @var string|null $Nr
     */
    protected $Nr;

    /**
     * @var string|null $Plz
     */
    protected $Plz;

    /**
     * @var OrtType|null $Ort
     */
    protected $Ort;

    /**
     * @var OrtszusatzType|null $Ortszusatz
     */
    protected $Ortszusatz;

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
     * @var LeitdatenType|null $Leitdaten
     */
    protected $Leitdaten;

    /**
     * @return string
     */
    public function getNr(): string
    {
        return (string) $this->Nr;
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
        return (string) $this->Plz;
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
     * @return OrtType|null
     */
    public function getOrt(): ?OrtType
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
     * @return OrtszusatzType|null
     */
    public function getOrtszusatz(): ?OrtszusatzType
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
        return (string) $this->Gemeinde;
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
        return (string) $this->Kreis;
    }

    /**
     * @param string $Kreis
     *
     * @return PostfilialeType
     */
    public function setKreis(string $Kreis): PostfilialeType
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
     * @return PostfilialeType
     */
    public function setRegBezirk(string $RegBezirk): PostfilialeType
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
     * @return PostfilialeType
     */
    public function setBundesland(string $Bundesland): PostfilialeType
    {
        $this->Bundesland = $Bundesland;
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
     * @return PostfilialeType
     */
    public function setLeitdaten(LeitdatenType $Leitdaten): PostfilialeType
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
