<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class UtmWgs84Type
{
    /**
     * @var string $Ost
     */
    protected $Ost;

    /**
     * @var string $Nord
     */
    protected $Nord;

    /**
     * @param string $Ost
     * @param string $Nord
     */
    public function __construct(
        string $Ost,
        string $Nord
    ) {
        $this->Ost = $Ost;
        $this->Nord = $Nord;
    }

    /**
     * @return string
     */
    public function getOst(): string
    {
        return $this->Ost;
    }

    /**
     * @return string
     */
    public function getNord(): string
    {
        return $this->Nord;
    }
}
