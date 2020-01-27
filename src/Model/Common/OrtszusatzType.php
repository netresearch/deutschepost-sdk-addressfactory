<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class OrtszusatzType
{
    /**
     * @var string
     */
    protected $_;

    /**
     * @var boolean $amtlich
     */
    protected $amtlich;

    /**
     * @param string $value
     * @param boolean $amtlich
     */
    public function __construct(
        string $value,
        bool $amtlich
    ) {
        $this->_ = $value;
        $this->amtlich = $amtlich;
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
     * @return OrtszusatzType
     */
    public function setValue(string $value): OrtszusatzType
    {
        $this->_ = $value;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAmtlich(): bool
    {
        return $this->amtlich;
    }

    /**
     * @param boolean $amtlich
     *
     * @return OrtszusatzType
     */
    public function setAmtlich(bool $amtlich): OrtszusatzType
    {
        $this->amtlich = $amtlich;
        return $this;
    }
}
