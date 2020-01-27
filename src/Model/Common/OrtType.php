<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class OrtType
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
     * @return OrtType
     */
    public function setValue(string $value): OrtType
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
     * @return OrtType
     */
    public function setKurz(string $kurz): OrtType
    {
        $this->kurz = $kurz;
        return $this;
    }
}
