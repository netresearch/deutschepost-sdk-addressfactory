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
     * @var boolean $amtlich Official German short form
     */
    protected $amtlich;

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
     * @return boolean
     */
    public function getAmtlich(): bool
    {
        return $this->amtlich;
    }

    /**
     * @param bool $amtlich
     */
    public function setAmtlich(bool $amtlich): void
    {
        $this->amtlich = $amtlich;
    }
}
