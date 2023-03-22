<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class PostfachType
{
    private ?string $Nr = null;

    private ?string $Plz = null;

    private ?OrtType $Ort = null;

    private ?OrtszusatzType $Ortszusatz = null;

    private ?LeitdatenType $Leitdaten = null;

    public function getNr(): string
    {
        return (string) $this->Nr;
    }

    public function setNr(string $Nr): PostfachType
    {
        $this->Nr = $Nr;
        return $this;
    }

    public function getPlz(): string
    {
        return (string) $this->Plz;
    }

    public function setPlz(string $Plz): PostfachType
    {
        $this->Plz = $Plz;
        return $this;
    }

    public function getOrt(): ?OrtType
    {
        return $this->Ort;
    }

    public function setOrt(OrtType $Ort): PostfachType
    {
        $this->Ort = $Ort;
        return $this;
    }

    public function getOrtszusatz(): ?OrtszusatzType
    {
        return $this->Ortszusatz;
    }

    public function setOrtszusatz(OrtszusatzType $Ortszusatz): PostfachType
    {
        $this->Ortszusatz = $Ortszusatz;
        return $this;
    }

    public function getLeitdaten(): ?LeitdatenType
    {
        return $this->Leitdaten;
    }

    public function setLeitdaten(LeitdatenType $Leitdaten): PostfachType
    {
        $this->Leitdaten = $Leitdaten;
        return $this;
    }
}
