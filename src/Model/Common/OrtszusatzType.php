<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class OrtszusatzType
{
    private string $_;

    /**
     * @var boolean|null $amtlich Official German short form
     */
    private ?bool $amtlich = null;

    public function __construct(string $value)
    {
        $this->_ = $value;
    }

    public function getValue(): string
    {
        return $this->_;
    }

    public function getAmtlich(): bool
    {
        return (bool) $this->amtlich;
    }

    public function setAmtlich(bool $amtlich): OrtszusatzType
    {
        $this->amtlich = $amtlich;
        return $this;
    }
}
