<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class PostfachType
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
        return (string) $this->Plz;
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
     * @return OrtType|null
     */
    public function getOrt(): ?OrtType
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
     * @return OrtszusatzType|null
     */
    public function getOrtszusatz(): ?OrtszusatzType
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
     * @return LeitdatenType|null
     */
    public function getLeitdaten(): ?LeitdatenType
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
