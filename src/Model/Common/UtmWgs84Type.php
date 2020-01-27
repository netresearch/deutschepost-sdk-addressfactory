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
     * @param string $Ost
     *
     * @return UtmWgs84Type
     */
    public function setOst(string $Ost): UtmWgs84Type
    {
        $this->Ost = $Ost;
        return $this;
    }

    /**
     * @return string
     */
    public function getNord(): string
    {
        return $this->Nord;
    }

    /**
     * @param string $Nord
     *
     * @return UtmWgs84Type
     */
    public function setNord(string $Nord): UtmWgs84Type
    {
        $this->Nord = $Nord;
        return $this;
    }
}
