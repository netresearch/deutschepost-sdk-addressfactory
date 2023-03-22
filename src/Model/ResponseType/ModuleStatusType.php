<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class ModuleStatusType extends Durchfuehrbares
{
    /**
     * @var DienstType[] $Dienst
     */
    private array $Dienst;

    private string $name;

    /**
     * @return DienstType[]
     */
    public function getDienst(): array
    {
        return $this->Dienst;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
