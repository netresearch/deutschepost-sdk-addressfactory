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
    protected $Dienst;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @return DienstType[]
     */
    public function getDienst(): array
    {
        return $this->Dienst;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
