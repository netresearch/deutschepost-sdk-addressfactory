<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class LeitdatenType
{
    /**
     * @var string|null $Leitcode
     */
    protected $Leitcode;

    /**
     * @var string|null $Alort
     */
    protected $Alort;

    /**
     * @var string|null $Frachtzentrum
     */
    protected $Frachtzentrum;

    /**
     * @var string|null $StrSchluessel
     */
    protected $StrSchluessel;

    /**
     * @var string|null $Kgs
     */
    protected $Kgs;

    /**
     * @return string
     */
    public function getLeitcode(): string
    {
        return (string) $this->Leitcode;
    }

    /**
     * @param string $Leitcode
     *
     * @return LeitdatenType
     */
    public function setLeitcode(string $Leitcode): LeitdatenType
    {
        $this->Leitcode = $Leitcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlort(): string
    {
        return (string) $this->Alort;
    }

    /**
     * @param string $Alort
     *
     * @return LeitdatenType
     */
    public function setAlort(string $Alort): LeitdatenType
    {
        $this->Alort = $Alort;
        return $this;
    }

    /**
     * @return string
     */
    public function getFrachtzentrum(): string
    {
        return (string) $this->Frachtzentrum;
    }

    /**
     * @param string $Frachtzentrum
     *
     * @return LeitdatenType
     */
    public function setFrachtzentrum(string $Frachtzentrum): LeitdatenType
    {
        $this->Frachtzentrum = $Frachtzentrum;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrSchluessel(): string
    {
        return (string) $this->StrSchluessel;
    }

    /**
     * @param string $StrSchluessel
     *
     * @return LeitdatenType
     */
    public function setStrSchluessel(string $StrSchluessel): LeitdatenType
    {
        $this->StrSchluessel = $StrSchluessel;
        return $this;
    }

    /**
     * @return string
     */
    public function getKgs(): string
    {
        return (string) $this->Kgs;
    }

    /**
     * @param string $Kgs
     *
     * @return LeitdatenType
     */
    public function setKgs(string $Kgs): LeitdatenType
    {
        $this->Kgs = $Kgs;
        return $this;
    }
}
