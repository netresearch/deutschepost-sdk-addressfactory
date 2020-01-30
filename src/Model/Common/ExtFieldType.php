<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class ExtFieldType
{
    /**
     * @var string
     */
    protected $_;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @param string $value
     * @param string $name
     */
    public function __construct(
        string $value,
        string $name
    ) {
        $this->_ = $value;
        $this->name = $name;
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
    public function getName(): string
    {
        return $this->name;
    }
}
