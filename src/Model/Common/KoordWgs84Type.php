<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class KoordWgs84Type
{
    private string $Breite;

    private string $Laenge;

    public function __construct(
        string $Breite,
        string $Laenge
    ) {
        $this->Breite = $Breite;
        $this->Laenge = $Laenge;
    }

    public function getBreite(): string
    {
        return $this->Breite;
    }

    public function getLaenge(): string
    {
        return $this->Laenge;
    }
}
