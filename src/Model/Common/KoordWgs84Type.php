<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class KoordWgs84Type
{
    /**
     * @var string
     */
    protected $Breite;

    /**
     * @var string
     */
    protected $Laenge;

    /**
     * @param string $Breite
     * @param string $Laenge
     */
    public function __construct(
        string $Breite,
        string $Laenge
    ) {
        $this->Breite = $Breite;
        $this->Laenge = $Laenge;
    }

    /**
     * @return string
     */
    public function getBreite(): string
    {
        return $this->Breite;
    }

    /**
     * @return string
     */
    public function getLaenge(): string
    {
        return $this->Laenge;
    }
}
