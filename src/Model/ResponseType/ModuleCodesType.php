<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class ModuleCodesType
{
    /**
     * @var string[] $StatusCode
     */
    protected $StatusCode;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @return string[]
     */
    public function getStatusCode(): array
    {
        return $this->StatusCode;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
