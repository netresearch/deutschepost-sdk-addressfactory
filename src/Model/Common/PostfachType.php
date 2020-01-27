<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class PostfachType
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
     * @return PostfachType
     */
    public function setNr(string $Nr): PostfachType
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
     * @return PostfachType
     */
    public function setPlz(string $Plz): PostfachType
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
     * @return PostfachType
     */
    public function setOrt(OrtType $Ort): PostfachType
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
     * @return PostfachType
     */
    public function setOrtszusatz(OrtszusatzType $Ortszusatz): PostfachType
    {
        $this->Ortszusatz = $Ortszusatz;
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
     * @return PostfachType
     */
    public function setLeitdaten(LeitdatenType $Leitdaten): PostfachType
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
