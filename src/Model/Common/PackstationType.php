<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class PackstationType
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
     * @return PackstationType
     */
    public function setNr(string $Nr): PackstationType
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
     * @return PackstationType
     */
    public function setPlz(string $Plz): PackstationType
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
     * @return PackstationType
     */
    public function setOrt(OrtType $Ort): PackstationType
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
     * @return PackstationType
     */
    public function setOrtszusatz(OrtszusatzType $Ortszusatz): PackstationType
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
     * @return PackstationType
     */
    public function setGemeinde(string $Gemeinde): PackstationType
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
     * @return PackstationType
     */
    public function setKreis(string $Kreis): PackstationType
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
     * @return PackstationType
     */
    public function setRegBezirk(string $RegBezirk): PackstationType
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
     * @return PackstationType
     */
    public function setBundesland(string $Bundesland): PackstationType
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
     * @return PackstationType
     */
    public function setLeitdaten(LeitdatenType $Leitdaten): PackstationType
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
