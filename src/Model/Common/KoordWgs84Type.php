<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class KoordWgs84Type
{
    /**
     * @var string $Laenge
     */
    protected $Laenge;

    /**
     * @var string $Breite
     */
    protected $Breite;

    /**
     * @param string $Laenge
     * @param string $Breite
     */
    public function __construct(
        string $Laenge,
        string $Breite
    ) {
        $this->Laenge = $Laenge;
        $this->Breite = $Breite;
    }

    /**
     * @return string
     */
    public function getLaenge(): string
    {
        return $this->Laenge;
    }

    /**
     * @param string $Laenge
     *
     * @return KoordWgs84Type
     */
    public function setLaenge(string $Laenge): KoordWgs84Type
    {
        $this->Laenge = $Laenge;
        return $this;
    }

    /**
     * @return string
     */
    public function getBreite(): string
    {
        return $this->Breite;
    }

    /**
     * @param string $Breite
     *
     * @return KoordWgs84Type
     */
    public function setBreite(string $Breite): KoordWgs84Type
    {
        $this->Breite = $Breite;
        return $this;
    }
}
