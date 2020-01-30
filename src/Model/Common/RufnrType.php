<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class RufnrType
{
    /**
     * @var string $Ortsvorwahl
     */
    protected $Ortsvorwahl;

    /**
     * @var string $Durchwahl
     */
    protected $Durchwahl;

    /**
     * One of the TYPE_ - constants
     *
     * @var string
     */
    protected $typ;

    /**
     * @param string $typ
     */
    public function __construct(string $typ)
    {
        $this->typ = $typ;
    }

    /**
     * @return string
     */
    public function getOrtsvorwahl(): string
    {
        return $this->Ortsvorwahl;
    }

    /**
     * @param string $Ortsvorwahl
     *
     * @return RufnrType
     */
    public function setOrtsvorwahl(string $Ortsvorwahl): RufnrType
    {
        $this->Ortsvorwahl = $Ortsvorwahl;
        return $this;
    }

    /**
     * @return string
     */
    public function getDurchwahl(): string
    {
        return $this->Durchwahl;
    }

    /**
     * @param string $Durchwahl
     *
     * @return RufnrType
     */
    public function setDurchwahl(string $Durchwahl): RufnrType
    {
        $this->Durchwahl = $Durchwahl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTyp(): string
    {
        return $this->typ;
    }
}
