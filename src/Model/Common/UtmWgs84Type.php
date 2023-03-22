<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class UtmWgs84Type
{
    private string $Ost;

    private string $Nord;

    public function __construct(
        string $Ost,
        string $Nord
    ) {
        $this->Ost = $Ost;
        $this->Nord = $Nord;
    }

    public function getOst(): string
    {
        return $this->Ost;
    }

    public function getNord(): string
    {
        return $this->Nord;
    }
}
