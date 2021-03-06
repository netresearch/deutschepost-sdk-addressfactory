<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class StrasseType
{
    /**
     * @var string
     */
    protected $_;

    /**
     * @var string|null $kurz
     */
    protected $kurz;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->_ = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->_;
    }

    /**
     * @return string
     */
    public function getKurz(): string
    {
        return (string) $this->kurz;
    }

    /**
     * @param string $kurz
     *
     * @return StrasseType
     */
    public function setKurz(string $kurz): StrasseType
    {
        $this->kurz = $kurz;
        return $this;
    }
}
