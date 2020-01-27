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
     * @var string $kurz
     */
    protected $kurz;

    /**
     * @param string $value
     * @param string $kurz
     */
    public function __construct(
        string $value,
        string $kurz
    ) {
        $this->_ = $value;
        $this->kurz = $kurz;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->_;
    }

    /**
     * @param string $value
     *
     * @return StrasseType
     */
    public function setValue(string $value): StrasseType
    {
        $this->_ = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getKurz(): string
    {
        return $this->kurz;
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
