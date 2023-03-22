<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class GkbDhdnType
{
    /**
     * @var string
     */
    private string $Rechtswert;

    /**
     * @var string
     */
    private string $Hochwert;

    public function __construct(
        string $Rechtswert,
        string $Hochwert
    ) {
        $this->Rechtswert = $Rechtswert;
        $this->Hochwert = $Hochwert;
    }

    public function getRechtswert(): string
    {
        return $this->Rechtswert;
    }

    public function getHochwert(): string
    {
        return $this->Hochwert;
    }
}
