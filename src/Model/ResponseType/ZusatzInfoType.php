<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class ZusatzInfoType
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
