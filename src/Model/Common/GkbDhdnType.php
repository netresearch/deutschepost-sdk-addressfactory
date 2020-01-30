<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class GkbDhdnType
{
    /**
     * @var string $Rechtswert
     */
    protected $Rechtswert;

    /**
     * @var string $Hochwert
     */
    protected $Hochwert;

    /**
     * @param string $Rechtswert
     * @param string $Hochwert
     */
    public function __construct(
        string $Rechtswert,
        string $Hochwert
    ) {
        $this->Rechtswert = $Rechtswert;
        $this->Hochwert = $Hochwert;
    }

    /**
     * @return string
     */
    public function getRechtswert(): string
    {
        return $this->Rechtswert;
    }

    /**
     * @return string
     */
    public function getHochwert(): string
    {
        return $this->Hochwert;
    }
}
