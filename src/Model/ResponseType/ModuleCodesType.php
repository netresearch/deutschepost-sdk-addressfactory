<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class ModuleCodesType
{
    /**
     * Depending on the SOAP_SINGLE_ELEMENT_ARRAYS setting, this may either be a string or an array of string(s).
     *
     * @var string[]|string $StatusCode
     */
    private string|array $StatusCode;

    private string $name;

    /**
     * @return string[]
     */
    public function getStatusCode(): array
    {
        if (is_string($this->StatusCode)) {
            return [$this->StatusCode];
        }

        return $this->StatusCode;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
