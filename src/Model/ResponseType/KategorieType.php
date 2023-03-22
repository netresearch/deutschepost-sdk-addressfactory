<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class KategorieType
{
    private string $indiz;

    private string $name;

    public function getIndiz(): string
    {
        return $this->indiz;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
