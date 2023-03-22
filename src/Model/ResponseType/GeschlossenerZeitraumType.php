<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class GeschlossenerZeitraumType
{
    private string $von;

    private string $bis;

    public function getVon(): string
    {
        return $this->von;
    }

    public function getBis(): string
    {
        return $this->bis;
    }
}
